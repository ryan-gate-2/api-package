<?php
// config for Westreels/WestreelsMain/gameconfig
return [


    /*
    |--------------------------------------------------------------------------
    | Application Casino Settings
    |--------------------------------------------------------------------------
    | Storing env values here so we can later easily enable roadrunner cache (www.roadrunner.dev)
    */

    /* Toggle API between local and external, set 'api_key_setting' to 'external' to use external api verification, else the variable is the apikey  */
    'api_key_setting' => 'apikey2020202',
    'api_key_local_var' => [
        'ip_allowed' => '127.0.0.1',
        'balance_url' => 'https://gamecontroller.westreels.com/dev/getBalance',
        'result_url' => 'https://gamecontroller.westreels.com/dev/result',
        'cashier_url' => 'https://gamecontroller.westreels.com/cashier',
    ],


    /* Server ip used for internal router middleware */
    'server_ip' => env('APP_SERVER_IP', '127.0.0.1'),
    'api_base_url' => 'http://api-worker.westreels.site',
    'api_playerlogin_prefix' => '/player/login',
    'api_session_create' => '/player/start',


    /* Generate hashmac for header in API on testing purposes */
    'hashmac_sign_creator' => true,

    /* Absolute Filepath location of the westreels main package */
    'package_main_path' => '/home/api-workerwestreelssite/westreels/westreels-main',
    'raw_db_storage' => '/home/api-workerwestreelssite/westreels/westreels-main/database/raw_database_storage',
    'js_script_storage' => '/home/api-workerwestreelssite/westreels/westreels-main/resources/js_script_store',

    /*
    |--------------------------------------------------------------------------
    | Cache Settings for Casino Functions
    |--------------------------------------------------------------------------
    | In development areas, set the APP_ENV to local in .env - this will disable the caching, while you can leave value below like you wish for production
    */

    'data_cache' => [
		'cache_gamelist_length' => 15,
		'cache_presets_length' => 10,
    ],


    /*
    |--------------------------------------------------------------------------
    | Pragmatic Specific Settings
    |--------------------------------------------------------------------------
    |
    | Game delays are in seconds, set to 0.00 to disable - please note that adding extra delay should only be done on low loads to emulate regular casino play. 
    | Setting 'device_url' is for sideloading extra content, if not using simply set to your staitc proxy URL.
    | Proxy static url should be rewriting with caching in nginx to pragmatic.
    */

    'pragmaticplay' => [
        'minilobby_url' => 'https://api-worker.westreels.site/gs2c/minilobby/start',
        'static_proxy_url_vs' => 'https://static-game-assets.pragmaticgaming.net/vs/',
        'static_proxy_url_cs' => 'https://static-game-assets.pragmaticgaming.net/cs/',
        'device_url' => 'static-game-assets.pragmaticgaming.net/js',
        'api_url' => 'http://api-worker.westreels.site',
        'realtoken' => 'AUTHTOKEN@976da71c84f7b5de894ae42a0273f3ee597e3f49813792f02614a424fd0614e1~stylename@sfws_betssw~SESSION@f29655bc-02a5-498c-ada9-48314f453cb5',
        'game_delay_trigger' => '0.00',
    	'game_delay_extra' => '4.3',
    ],

];
