<?php
namespace Westreels\WestreelsMain\GameControllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class GameKernel
{
 	public static function errorHandler($meta, $statuscode, $errorType)
	{
        if(!$meta || !$statuscode || !$errorType)
        {
            $error = array('meta' => $meta, 'errorcode' => $statuscode);
            return response()->view('westreels::error-default-template', $error, 500);
        }

        if($errorType === 'pragmaticplay') {
            $error = array('meta' => $meta, 'errorcode' => $statuscode);
            return response()->view('westreels::pragmaticplay-error-template', $error, $statuscode);
        }


        //Fallback
            $error = array('meta' => $meta, 'errorcode' => $statuscode);
            return response()->view('westreels::error-default-template', $error, $statuscode);

	}
}


