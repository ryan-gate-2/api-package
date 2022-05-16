<?php

use Illuminate\Support\Facades\Route;
use Westreels\WestreelsMain;
use Illuminate\Http\Request;

Route::group(['middleware' => ['api']], function () {
    Route::get('/player/login', '\Westreels\WestreelsMain\Gate\PlayerGateController@playerLogin');
    Route::get('/player/entryToken', '\Westreels\WestreelsMain\Gate\EntryGateController@createEntryToken');
    Route::get('/internal/pragmaticplaySessionStart', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\StartSessionPragmaticPlay@pragmaticplaySessionStart');
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/teete', function () {  
        return auth()->user();
    });
});

Route::middleware('api', 'throttle:500,1')->group(function () {

    Route::get('/gs2c/minilobby/start/{signature}/{time}', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\StartSessionPragmaticPlay@pragmaticplaySessionChangeGame');
 

    Route::post('/gs2c/v3/gameService', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticplayMixed'])->name('pragmaticplayMixed');
    Route::post('/gs2c/ge/v4/gameService', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticplayMixed'])->name('pragmaticplayMixed');
    Route::post('/gs2c/gameService', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticplayMixed'])->name('pragmaticplayMixed');

    Route::post('/gs2c/saveSettings.do', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticplaySettingsStateCurl'])->name('savesettings');
    Route::get('/gs2c/reloadBalance.do', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticplayBalanceOnly'])->name('reloadbalance');


    Route::get('/gs2c/announcements/unread', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticplayUnreadAnnouncements'])->name('pragmaticplayUnreadAnnouncements');
    Route::get('/gs2c/promo/active', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayPromotions'])->name('pragmaticplayPromotions');
    Route::get('/gs2c/minilobby/games', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayMiniLobbyGames'])->name('pragmaticPlayMiniLobbyGames');

    Route::get('/gs2c/promo/tournament/details', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayPromotionsDetails'])->name('pragmaticPlayPromotionsDetails');
    Route::get('/gs2c/promo/tournament/scores', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayPromotionsScores'])->name('pragmaticPlayPromotionsScores');
    Route::get('/gs2c/promo/tournament/v3/leaderboard', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayPromotionsLeaderboardV3'])->name('pragmaticPlayPromotionsLeaderboardV3');

    Route::get('/gs2c/promo/race/details', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayRaceDetails'])->name('pragmaticPlayRaceDetails');
    Route::get('/gs2c/promo/race/prizes', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayRacePrizes'])->name('pragmaticPlayRacePrizes');
    Route::get('/gs2c/promo/race/winners', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\GameCallbacksPragmaticPlay::class, 'pragmaticPlayRaceWinners'])->name('pragmaticPlayRaceWinners');


});





Route::get('logo_info.js', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions::class, 'logo_info_js'])->name('js_logo_config');
Route::get('wurfl.js', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions::class, 'wurfl_js'])->name('wurfl_js');
Route::get('html5-script-external.js', [\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions::class, 'html5_script_external_js'])->name('html5script');

Route::get('/testprag', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\StartSessionPragmaticPlay@pragmaticplayTestSession');
 Route::get('/testauthprag', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions@getRealAuthedPlayer');

 Route::get('/betsIORequest', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions@betsIORequest');
Route::get('/pragmaticRealAuthStart', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\StartSessionPragmaticPlay@pragmaticRealAuthStart');

 Route::get('/savesettingsRealAuth', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions@pragmaticplaySettingsStateRealAuth');
 Route::get('/pragmaticplayLoginRealAuth', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions@pragmaticplayLoginRealAuth');
 Route::get('/pragmaticplayDoSpinRealAuth', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions@pragmaticplayDoSpinRealAuth');

 Route::get('/pragmaticplayPromoRealAuth', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions@pragmaticplayPromoRealAuth');
 Route::get('/betsIORequestKeepAlive', '\Westreels\WestreelsMain\GameControllers\PragmaticPlay\SideFunctions@betsIORequestKeepAlive');





Route::get('/dev/hashmacCreate', '\Westreels\WestreelsMain\Gate\GateFunctions@hashmacCreate');
