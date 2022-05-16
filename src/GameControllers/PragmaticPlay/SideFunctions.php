<?php
namespace Westreels\WestreelsMain\GameControllers\PragmaticPlay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Cache;

class SideFunctions
{
    public static function getBetween($string, $start = "", $end = ""){
        if (strpos($string, $start)) { // required if $start not exist in $string
            $startCharCount = strpos($string, $start) + strlen($start);
            $firstSubStr = substr($string, $startCharCount, strlen($string));
            $endCharCount = strpos($firstSubStr, $end);
            if ($endCharCount == 0) {
                $endCharCount = strlen($firstSubStr);
            }
            return substr($firstSubStr, 0, $endCharCount);
        } else {
            return '';
        }
    }

    public static function promoGetThroughPlayerLoad()
	{
	    return 'https://softswiss.pragmaticplay.net/gs2c/promo/active/?symbol=vs25wolfgold&mgckey=AUTHTOKEN@40646b3f473cca0d778e616bd70b5a8672d5b9ca1562384b340ad8abd99518fb~stylename@sfws_betssw~SESSION@6aa89501-95bb-4e9c-bfd1-fe2a0e108f2b';

	    return $getBetsio;
	}

    public function pragmaticplayPromoRealAuth(Request $request) 
    {

        $response = Http::get('https://api-worker.westreels.site/gs2c/promo/active/?symbol=vs10bbbonanza&mgckey=stylename@generic~SESSION@8a1b9a78-671b-4b89-8e30-5a9add00c0f2');

        return $response;
    }

    public function pragmaticplaySettingsStateRealAuth(Request $request) 
    {

        $url = 'https://softswiss.pragmaticplay.net/gs2c/saveSettings.do';
        $data = 'method=load&id=vs25wolfgold&mgckey=AUTHTOKEN@40646b3f473cca0d778e616bd70b5a8672d5b9ca1562384b340ad8abd99518fb~stylename@sfws_betssw~SESSION@6aa89501-95bb-4e9c-bfd1-fe2a0e108f2b';

        $response = Http::retry(1, 1000, function ($exception, $request) {
                return $exception instanceof ConnectionException;
        })->withBody(
            $data, 'application/x-www-form-urlencoded'
        )->post($url);

        return $response;
    }
    public function pragmaticplayDoSpinRealAuth(Request $request) 
    {

        $url = 'https://softswiss.pragmaticplay.net/gs2c/v3/gameService';
        $data = 'action=doSpin&symbol=vs10bbbonanza&c=0.1&l=10&index=2&counter=3&repeat=0&mgckey=AUTHTOKEN@40646b3f473cca0d778e616bd70b5a8672d5b9ca1562384b340ad8abd99518fb~stylename@sfws_betssw~SESSION@6aa89501-95bb-4e9c-bfd1-fe2a0e108f2b';

        $response = Http::retry(1, 1000, function ($exception, $request) {
                return $exception instanceof ConnectionException;
        })->withBody(
            $data, 'application/x-www-form-urlencoded'
        )->post($url);

        return $response;
    }

    public function pragmaticplayLoginRealAuth(Request $request) 
    {

        $url = 'https://softswiss.pragmaticplay.net/gs2c/v3/gameService';
        $data = 'action=doInit&symbol=vs25wolfgold&cver=101997&index=1&counter=1&repeat=0&mgckey=AUTHTOKEN@40646b3f473cca0d778e616bd70b5a8672d5b9ca1562384b340ad8abd99518fb~stylename@sfws_betssw~SESSION@6aa89501-95bb-4e9c-bfd1-fe2a0e108f2b';

        $response = Http::retry(1, 1000, function ($exception, $request) {
                return $exception instanceof ConnectionException;
        })->withBody(
            $data, 'application/x-www-form-urlencoded'
        )->post($url);

        return $response;
    }


	public static function getRealAuthedPlayer()
	{
		// we login real player on a random casino (can be any as far I can see), so that we can retrieve on-going prize tournaments & races, players for now will not be able to actually win any prizes (overlay talking, not the regular mini/mega pots in games)

		// after finishing replay system we can easily implement actual participation and actual configuration per operator from panel (in future), same as we did on the evolution gaming crack : - ) 

		// we only need to log it in around 1x per 30 minutes, and in mean time we can use the auth token for all 300~ games for replay & prize and tournament retrieval

		// in the case here we are using the bets.io casino, but you can use any casino aslong it has the games probably you can do so with all other frauding casino's like stake.com, bc.game, wolf.bet etc. 

		//$getBetsio = Http::get('https://api-worker.westreels.site/betsIORequest');
	    $token = Cache::get('pragmatic:realauth');
	    $header = Http::withHeaders([
	        'Cookie' => '_ga=GA1.3.357109396.1652646732; _gid=GA1.3.1953136145.1652646732; wurfljs_cache=%7B%22advertised_browser%22%3A%22Safari%22%2C%22advertised_browser_version%22%3A%2214.1.2%22%2C%22advertised_device_os%22%3A%22macOS%22%2C%22advertised_device_os_version%22%3A%2210.15.7%22%2C%22brand_name%22%3A%22Apple%22%2C%22complete_device_name%22%3A%22Apple%20Safari%22%2C%22form_factor%22%3A%22Desktop%22%2C%22is_app_webview%22%3Afalse%2C%22is_full_desktop%22%3Atrue%2C%22is_mobile%22%3Afalse%2C%22is_robot%22%3Afalse%2C%22is_smartphone%22%3Afalse%2C%22is_smarttv%22%3Afalse%2C%22is_tablet%22%3Afalse%2C%22manufacturer_name%22%3A%22%22%2C%22marketing_name%22%3A%22%22%2C%22max_image_height%22%3A600%2C%22max_image_width%22%3A800%2C%22model_name%22%3A%22Safari%22%2C%22physical_screen_height%22%3A400%2C%22physical_screen_width%22%3A400%2C%22pointing_method%22%3A%22mouse%22%2C%22resolution_height%22%3A600%2C%22resolution_width%22%3A800%2C%22version%22%3A%2211929c5%22%7D',
	        'Cache-Control' => 'no-cache',
	        'Referrer' => 'https://softswiss.pragmaticplay.net/',
	        'Connection' => 'keep-alive',
	        'Host' => 'softswiss.pragmaticplay.net',
	        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15',
	    ])->get('https://softswiss.pragmaticplay.net/gs2c/promo/active/?symbol=vs25wolfgold&mgckey='.$token);
	    //http://104.22.2.150/games/pragmaticexternal/WolfGold/29625
	    return $header;

	    //return $token;

	    //return 'https://softswiss.pragmaticplay.net/gs2c/promo/active/?symbol=vs25wolfgold&mgckey=AUTHTOKEN@e5fe73b89762d637bcc7a633c74f25e4e236f5f20410d7c17412c5dd6a670619~stylename@sfws_betssw~SESSION@c352e3d7-c12c-4a5f-86ed-e34f9e01339f;
	}
	public static function betsIORequest()
	{
	    $header = Http::withHeaders([
	        'Cookie' => '_casino_session=7107ed5d50a5b22ab41ff6590cfa23b3; original_user_id=MTI0NDM%3D--5df5b9fc4cbfef28b49be93ca29ad1b03494293c; _ga_GWC3ZK8F5X=GS1.1.1652646677.1.1.1652646727.10; _ga=GA1.1.497458425.1652646677; dateamlutsk-_zldp=M6KbIcofZ5PaiOzmmVId8Md%2BTFIY5Tgev6jFQwQD6DbTSVdsr%2FwcfXHOWZkE%2BL6ZePY%2BNqbYXuk%3D; dateamlutsk-_zldt=67958d0c-f12f-4fbf-8314-cf51d32cce91-0; locale=ImVuIg%3D%3D--faa52eee2a616938ef2a4bf113bd5f0e77a9168a',
	        'Cache-Control' => 'no-cache',
	        'Connection' => 'keep-alive',
	        'Host' => 'api.bets.io',
	        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15',
	    ])->get('http://104.22.2.150/games/pragmaticexternal/WolfGold/29625');
	    //http://104.22.2.150/games/pragmaticexternal/WolfGold/29625
	    return $header;
	}


	public static function betsIORequestKeepAlive()
	{
	    $header = Http::get('https://softswiss.pragmaticplay.net/gs2c/html5Game.do?jackpotid=0&gname=Wolf%20Gold&extGame=1&ext=0&cb_target=exist_tab&symbol=vs25wolfgold&jurisdictionID=99&lobbyUrl=https%3A%2F%2Fapi.bets.io%2Fexit_iframe&cashierUrl=https%3A%2F%2Fapi.bets.io%2Faccounts%2FBTC%2Fdeposit%3Fredirected_from_game%3Dtrue&minilobby=false&mgckey=AUTHTOKEN@16f746bc6706ae948a5358512df237f7e844641052168545eb9f722a42a9a475~stylename@sfws_betssw~SESSION@1cb86793-4c0d-4158-977c-51a72ab7e658&tabName=');
	    //http://104.22.2.150/games/pragmaticexternal/WolfGold/29625
	    return $header;
	}


	public static function miniLobbyGames()
	{
		$lobbyGames = file_get_contents(config('gameconfig.js_script_storage').'/minilobbygames.json');
	

		$time = time();
		$mgckey = $_GET['mgckey'];
		$signature = hash_hmac('md5', $mgckey, $time.$mgckey);

		$gameStartURL = config('gameconfig.pragmaticplay.minilobby_url').'/'.$signature.'/'.$time;

		$data_origin = json_decode($lobbyGames);
		$data_origin->gameLaunchURL = $gameStartURL;

		return $data_origin;
	}



	public static function announcements()
	{
		//https://softswiss.pragmaticplay.net/gs2c/announcements/unread/?symbol=vs25wolfgold&mgckey=AUTHTOKEN@b11a28c53c38d3cbd2d0f1af251e4f5ee4f63634191b0807e62292bc4979cf52~stylename@sfws_betssw~SESSION@4055c52c-e6b8-49c9-8692-d2130173be4a

		$announcements = array("error" => 0, "description" => "OK", "announcements" => array());
		return $announcements;
	}

	public static function logo_info_js()
	{
		//later make these specific for operators configurable, as it contains important config that is nice for operators to be able to customize
		$getLogoInfo = file_get_contents(config('gameconfig.js_script_storage').'/logo_info.js');

		return response($getLogoInfo, 200)->header('Content-Type', 'application/javascript');
	}
	public static function wurfl_js()
	{
		//this file we can easily add in frontend edits (like passing on extra vars, or doing additional things in frontend if we need to get into the frontend client at any point - this script is for detecting device etc.)
		$wurfl = file_get_contents(config('gameconfig.js_script_storage').'/wurfl.js');
		return response($wurfl, 200)
                  ->header('Content-Type', 'application/javascript');
	}

	public static function html5_script_external_js()
	{
		$html5ExternalJS = file_get_contents(config('gameconfig.js_script_storage').'/html5-script-external.js');
		return $html5ExternalJS;
	}


}