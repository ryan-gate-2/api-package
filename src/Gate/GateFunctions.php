<?php
namespace Westreels\WestreelsMain\Gate;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class GateFunctions extends \App\Http\Controllers\Controller
{

    public function hashmacCreate(Request $request) 
    {
        $headerApikey = $request->header('x-apikey');
        $headerTimestamp = $request->header('x-time');

        if(env('APP_ENV') === 'local') {
            if(config('gameconfig.hashmac_sign_creator') === true) {
                $hash = hash_hmac('sha256', $headerApikey, time());
                return array('x-sign' => $hash, 'x-apikey' => $headerApikey, 'x-time' => time());
            }
        }

        return false;
    }

    public function apiGate($apikey, $mode = NULL)
    {   
        $apikey_config = config('gameconfig.api_key_setting');
        if($apikey_config !== 'external') {
            if($apikey !== $apikey_config) {
                return false;
            }
        }

        $callbackArray = array([
            'ip_allowed' => config('gameconfig.api_key_local_var.ip_allowed'),
            'balance_url' => config('gameconfig.api_key_local_var.balance_url'),
            'result_url' => config('gameconfig.api_key_local_var.result_url'),
            'cashier_url' => config('gameconfig.api_key_local_var.cashier_url'),
        ]);
        
        if($mode === NULL) {
            return true;
        }

        return $callbackArray;
    }

    public function mainGate(Request $request)
    {
        $headerApikey = $request->header('x-apikey');
        $headerTimestamp = $request->header('x-time');
        $headerSigned = $request->header('x-sign');
    
        //return array('hash' => $hash, 'apikey' => $headerApikey, 'timestamp' => $headerTimestamp);

        if($headerApikey === NULL || $headerTimestamp === NULL || $headerSigned === NULL) {
            return response()->json(['status' => 403, 'error' => 'Validation of request failed.'])->setStatusCode(403);
        }

        $hash = hash_hmac('sha256', $headerApikey, $headerTimestamp);

        if($hash !== $headerSigned) {
            return response()->json(['status' => 403, 'error' => 'Validation of signature failed.'])->setStatusCode(403);
        }

        if((time() - $headerTimestamp) > 5000) {
            return response()->json(['status' => 400, 'error' => 'Validation of request failed.', 'validation_messages' => 'Timestamp expired'])->setStatusCode(400);
        }

        $apikeyCheck = $this->apiGate($headerApikey);
        if($apikeyCheck === true) {
            return true;
        }
        
        return false;
    }

    public static function errorHandlerApi($meta, $statuscode, $errorType)
    {
        if(!$meta || !$statuscode || !$errorType)
        {
            $error = array('meta' => $meta, 'errorcode' => $statuscode);
            return response()->view('westreels::error-default-template', $error, 500);
        }

        //Fallback
            $error = array('meta' => $meta, 'errorcode' => $statuscode);
            return response()->view('westreels::error-default-template', $error, $statuscode);
    }


}
 
