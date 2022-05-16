<?php
namespace Westreels\WestreelsMain\GameControllers\PragmaticPlay;

use Westreels\WestreelsMain\GameControllers\GameKernel;
use Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions;
use Westreels\WestreelsMain\Gate\GateFunctions;
use Westreels\WestreelsMain\Models\Gamesessions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Response;


class StartSessionPragmaticPlay
{
    public function pragmaticplayTestSession(Request $request)
    {
        $selectGame = DB::table('gamelist_pragmatic')->where('game_id', $request->game_id)->first();
        $strLowerProvider = strtolower($selectGame->provider);
        $buildArray = array(
            'game_id' => $selectGame->game_id,
            'game_name' => $selectGame->fullName,
            'api_origin_id' => $selectGame->api_origin_id,
            'api_extension' => $selectGame->api_extension,
            'provider' => $strLowerProvider,
            'player' => 1,
            'currency' => 'USD', // should be in request
            'mode' => 'real', //should be in request demo/real money play
            'method' => 'gameRequestByPlayer',
        );
        return Http::timeout(5)->get(config('app.url').'/internal/pragmaticplaySessionStart', $buildArray);
    }

    public function pragmaticRealAuthStart(Request $request)
    {   
        $get = SideFunctions::promoGetThroughPlayerLoad();
        return view('westreels::pragmaticplay-realauth')->with('content', $get);
    }

    public function pragmaticplaySessionChangeGame(Request $request)
    { 
        $mgckey = $request['mgckey'];
        $signature = $request['signature'];
        $timeNonce = $request['time'];

        $generateSignature = hash_hmac('md5', $mgckey, $timeNonce.$mgckey);

        $getInternalSession = Gamesessions::where('token_original', $request['mgckey'])->where('created_at', '>', Carbon::now()->subMinutes(90))->first();
        if(!$getInternalSession) {
            return GameKernel::errorHandler('Session does not exist or is invalid. Please refresh.', 403, 'pragmaticplay');
        }

        if($signature === $generateSignature) {
            return GameKernel::errorHandler('Session does not seem valid anymore.', 403, 'pragmaticplay');
        }

        $selectGame = DB::table('gamelist_pragmatic')->where('api_origin_id', $request['gameSymbol'])->first();

        if(!$selectGame) {
            return GameKernel::errorHandler('Game could not be found, please try a different game.', 404, 'pragmaticplay');
        }

        //$getInternalSession->update(['expired_bool' === 1]); // Not sure if we should expire the previous token after changing because players might wanna multi game, also should have no negative impact regardless on security whatsoever
        $strLowerProvider = strtolower($selectGame->provider); 

        $buildArray = array(
            'game_id' => $selectGame->game_id,
            'game_name' => $selectGame->fullName,
            'api_origin_id' => $selectGame->api_origin_id,
            'api_extension' => $selectGame->api_extension,
            'provider' => $strLowerProvider,
            'player' => $getInternalSession->player,
            'currency' => $getInternalSession->currency, // should be in request
            'mode' => 'real', //should be in request demo/real money play
            'method' => 'gameRequestMinilobbyByPlayer',
        );
        return Http::timeout(5)->get(config('app.url').'/internal/pragmaticplaySessionStart', $buildArray);
    }            

    public function pragmaticplaySessionStart(Request $request)
    {   
        $fullContent = $request;
        //Check if existing internal session is available
        $getInternalSession = Gamesessions::where('game_id', $fullContent->game_id)->where('player_id', $fullContent->player)->where('expired_bool', 0)->where('currency', $fullContent->currency)->where('created_at', '>', Carbon::now()->subMinutes(10))->first();
        $newSession = false;

        if(!$getInternalSession) {
            $internalToken = Str::uuid();
            $createInternalSession = Gamesessions::create([
                'game_id' => $fullContent->game_id,
                'token_internal' => $internalToken,
                'token_original' => '0',
                'currency' => $fullContent->currency,
                'extra_meta' => $request->api_origin_id,
                'expired_bool' => 0,
                'games_amount' => 0,
                'player_id' => $fullContent->player,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $newSession = true;
            $getInternalSession = $createInternalSession;
        }

        if($newSession === true) {
            $compactSessionUrl = "https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=".$request->api_origin_id."&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&technology=H5&token=".$getInternalSession->token_internal."&platform=WEB&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=en&cur=".$request->currency."";

            $ch = curl_init($compactSessionUrl);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0); 
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $html = curl_exec($ch);
            $redirectURL = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            curl_close($ch);

            $launcherTest = Http::withOptions([
                'verify' => false,
            ])->get($redirectURL);

            $parts = parse_url($redirectURL);
            parse_str($parts['query'], $query);

                $createInternalSession->update([
                    'token_original' => $query['mgckey']
                ]);

            } else {
                $redirectURL = 'https://demogamesfree.pragmaticplay.net/gs2c/html5Game.do?extGame=1&mgckey='.$getInternalSession->token_original.'&symbol='.$request->api_origin_id.'&jurisdictionID=99';
                $launcherTest = Http::withOptions([
                    'verify' => false,
                ])->get($redirectURL);
            }


        if($launcherTest->status() !== 200) {
            $getInternalSession->update(['expired_bool' => 1]);
            return GameKernel::errorHandler('Session extend failed. Please refresh.', 403, 'pragmaticplay');
        }

        $replaceAPItoOurs = str_replace('/operator_logos/', '', $launcherTest);
        $replaceAPItoOurs = str_replace('"datapath":"https://demogamesfree.pragmaticplay.net/gs2c/common/games-html5/games/vs/',  '"datapath":"'.config('gameconfig.pragmaticplay.static_proxy_url_vs'), $replaceAPItoOurs);
        $replaceAPItoOurs = str_replace('"datapath":"https://demogamesfree.pragmaticplay.net/gs2c/common/games-html5/games/cs/',  '"datapath":"'.config('gameconfig.pragmaticplay.static_proxy_url_cs'), $replaceAPItoOurs);

        //$replaceAPItoOurs = str_replace('"/gs2c',  '"/api/gs2c', $replaceAPItoOurs);
        $replaceAPItoOurs = str_replace('"https://demogamesfree.pragmaticplay.net/gs2c/ge/v4/gameService',  '"https://'.config('gameconfig.pragmaticplay.api_url').'/gs2c/ge/v4/gameService', $replaceAPItoOurs);
        $deviceURL = str_replace('https://', '', config('app.url'));
        $replaceAPItoOurs = str_replace('device.pragmaticplay.net',  $deviceURL, $replaceAPItoOurs);
        $replaceAPItoOurs = str_replace('demoMode":"1"',  'demoMode":"0"', $replaceAPItoOurs);
        $replaceAPItoOurs = str_replace('/gs2c/v3/gameService',  '/gs2c/v3/gameService', $replaceAPItoOurs);
        $replaceAPItoOurs = str_replace('{"datapath"', '{"extend_events":"1","sessionTimeout":"999","openHistoryInTab":true,"replaySystemUrl":"https://replay.pragmaticplay.net","multiProductMiniLobby":false,"ingameLobbyApiURL":"/gs2c/minilobby/games","integrationType":"HTTP","environmentId":"25","historyType":"internal","datapath"', $replaceAPItoOurs);
        $finalLauncherContent = $replaceAPItoOurs;

        return view('westreels::pragmaticplay-client')->with('content', $finalLauncherContent);

    }
}
