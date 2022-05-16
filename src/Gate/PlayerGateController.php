<?php
namespace Westreels\WestreelsMain\Gate;

use Westreels\WestreelsMain\Gate\GateFunctions;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PlayerGateController extends \Westreels\WestreelsMain\Gate\GateFunctions
{

    protected $gatefunctions;

    public function __construct(GateFunctions $gatefunctions)
    {
        $this->mainGate = $gatefunctions;
    }

    public function playerLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'player_id' => ['required', 'min:3', 'max:100', 'regex:/^[^(\|\]`!%^&=};:?><’)]*$/'],
            'cointype' => ['required', 'min:2', 'max:7'],
            'name' => ['required', 'min:4', 'max:25'],
            'email' => ['required', 'email', 'min:4', 'max:100'],
            'password' => ['required'],
        ]);

        if ($validator->stopOnFirstFailure()->fails()) {
            return response()->json(['status' => 400, 'error' => 'Validation of request failed.', 'validation_messages' => $validator->errors()])->setStatusCode(400);
        }

        // API access
        $verifyApi = $this->mainGate($request);
        if(!$verifyApi) { return $verifyApi; }

        $user = User::where('email', $request->email)->where('player_id', $request->player_id)->where('active_currency', $request->cointype)->first();

        $newUserCreated = false;
        if(!$user) {
            $newUserCreated = true;

            $user = \App\Models\User::create([
                    'name' => $request->name,
                    'player_id' => $request->player_id,
                    'active_currency' => $request->cointype,
                    'password' => bcrypt($request->password),
                    'email' => $request->email,
            ]);
        } 

        $revokePreviousToken = $user->tokens()->delete();
        $token = $user->currentAccessToken('player:auth');

        if(!$token) {
            $token = $user->createToken('player:auth', ['remember']);
        }

        $loginToken = Str::random(60);
         $user->forceFill([
            'api_token' => hash('sha256', $loginToken),
            'api_created_at' => now(),
        ])->save();

        return ['player' => $user, 'plain_token' => $token->plainTextToken, 'login_token' => hash('sha256', $loginToken)];
    }
}
 
