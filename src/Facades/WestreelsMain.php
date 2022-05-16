<?php

namespace Westreels\WestreelsMain\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Westreels\WestreelsMain\WestreelsMain
 */
class WestreelsMain extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'westreels-main';
    }

    
}
