<?php
namespace Westreels\WestreelsMain\Gate;

use Westreels\WestreelsMain\Gate\GateFunctions;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class EntryGateController extends \Westreels\WestreelsMain\Gate\GateFunctions
{

    protected $gatefunctions;

    public function __construct(GateFunctions $gatefunctions)
    {
        $this->mainGate = $gatefunctions;
    }

    public function createEntryToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'player_id' => ['required', 'min:3', 'max:150', 'regex:/^[^(\|\]`!%^&=};:?><’)]*$/'],
            'player_token' => ['required', 'min:3', 'max:150'],
            'game_id' => ['required', 'min:2', 'max:80'],
        ]);

        if ($validator->stopOnFirstFailure()->fails()) {
            return response()->json(['status' => 400, 'error' => 'Validation of request failed.', 'validation_messages' => $validator->errors()])->setStatusCode(400);
        }
 
        // API access
        $verifyApi = $this->mainGate($request);
        if(!$verifyApi) { return $verifyApi; }
 
        $user = User::where('player_id', $request->player_id)->where('api_token', $request->player_token)->first();
        if(!$user) {
            return response()->json([
                'error' => 'Player token does not seem valid, make sure to login player on API first to get a valid login player token.',
            ], 404);
        }

        $generateEntryToken = Str::random(60);

        $returnArray = array(
            'game_id' => $request->game_id,
            'player_id' => $request->player_id,
            'player_token' => $request->player_token,
            'player_token_created_at' => $user->api_created_at
        );

        return $returnArray;
    }
}
 
