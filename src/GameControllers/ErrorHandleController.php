<?php
namespace Westreels\WestreelsMain\GameControllers;
use Illuminate\Http\Request;
use Westreels\WestreelsMain\Gate\GateFunctions;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Westreels\WestreelsMain\Models\Gamesessions;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Validator;

class ErrorHandleController
{
 
	// Can be used within laravel project on your front to implement games, makes player session
	public function enterGame(Request $request)
	{
		// We first login player on api-side, if player does not exist in our database it will create the player
		// API will return a one-time api token to login player to the game
		// Player ID should be your own player identifier, so you can process bets and return balance accordingly on callback requests

        $validator = Validator::make($request->all(), [
            'player_id' => ['required', 'min:3', 'max:100'],
            'currency' => ['required', 'min:2', 'max:7'],
            'name' => ['required', 'min:4', 'max:25'],
            'email' => ['required', 'email', 'min:4', 'max:25'],
            'password' => ['required'],
        ]);

        if ($validator->stopOnFirstFailure()->fails()) {
            return response()->json(['status' => 400, 'error' => 'Validation of request failed.', 'validation_messages' => $validator->errors()])->setStatusCode(400);
        }

        $apikey = config('gameconfig.api_key_setting'); // pass your apikey here that we supplied
        $timestamp = time(); // pass current timestamp, timestamp once we receive can not be older then 30seconds
        $sign = hash_hmac('sha256', $apikey, $timestamp); // use HMAC (sha256 encryption) to sign the request, use apikey as body & timestamp as secret

        $loginEntryURL = config('gameconfig.api_base_url').config('gameconfig.api_playerlogin_prefix');
        $id = $request->player_id;
        $currency = $request->currency;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;



	    $sendLoginRequest = Http::withHeaders([
	        'x-apikey' => $apikey, //replace by your apikey
	        'x-time' => $timestamp,
	        'x-sign' => $sign,
	    ])->get($loginEntryURL.'?player_id='.$id.'&cointype='.$currency.'&name='.$name.'&email='.$email.'&password='.$password);




	    return $sendLoginRequest;
	}
}


