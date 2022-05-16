<?php

namespace Westreels\WestreelsMain;

class WestreelsMain
{
     public static function indexTest()
    {
        $get = json_encode(\Westreels\WestreelsMain\Models\Gamesessions::print());
        return $get;
    }


}


