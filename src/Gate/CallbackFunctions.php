<?php
namespace Westreels\WestreelsMain\Gate;

use Westreels\WestreelsMain\Gate\GateFunctions;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CallbackFunctions extends \Westreels\WestreelsMain\Gate\GateFunctions
{
    public function generalizedBalanceCall($playerid, $currency, $type = NULL) 
    {
        //temp
        return (int) 1000;


        if($type === NULL) {
            $type = 'internal';
            $player = User::where('id', $playerid)->first();

            if($currency === 'USD') {
                return (int) $retrieveBalance = $player->balance_usd * 100;
            } elseif($currency === 'EUR') {
                return (int) $retrieveBalance = $player->balance_eur * 100;
            } else {
                abort(400, 'balance not supported');            
            }
        } else {
            // Here we will add later on external balance/bet callbacks, outside of own system (for example i have in mind to make 'full api' & 'internal' mode)
            $type = $type;
        }
    }


    public function generalizedBetCall($playerid, $currency, $gameid, $betAmount, $winAmount, $type = NULL) 
    {
        //temp
        return (int) 1000;
        
        if($type === NULL) {
            $type = 'internal';
            $player = User::where('id', $playerid)->first();

            if($currency === 'USD') {
                $playerCurrentBalance = self::generalizedBalanceCall($playerid, $currency);
                
                // To add error response for insufficient balance on bgaming
                if($betAmount > $playerCurrentBalance) {
                    return response()->json([
                        'error' => 'nobalance'
                    ], 402);
                }

                $processBetCalculation = $playerCurrentBalance - $betAmount;
                $processWinCalculation = $processBetCalculation + $winAmount;
                $transformToOurBalanceFormat = floatval($processWinCalculation / 100);
                $player->update(['balance_usd' => $transformToOurBalanceFormat]);

                return $processWinCalculation;


            } elseif($currency === 'EUR') {
                return (int) $retrieveBalance = $player->balance_eur * 100;
            } else {
                abort(400, 'balance not supported');            
            }
        } else {
            // Here we will add later on external balance/bet callbacks, outside of own system (for example i have in mind to make 'full api' & 'internal' mode)
            $type = $type;

        }
    }

}