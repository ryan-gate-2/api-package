<?php

namespace Westreels\WestreelsMain\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class GamelistPragmaticPlay extends Eloquent  {
      
    protected $table = 'gamelist_pragmatic';
    protected $timestamp = true;
    protected $primaryKey = 'id';

    protected $fillable = [
        'game_id',
        'id',
        'fullName',
        'thumbnail',
        'thumbnail_ext',
        'isRecommend',
        'isHot',
        'isNew',
        'tags',
        'rtpDes',
        'open',
        'category',
        'order_rating',
        'short_desc',
        'funplay',
        'api_extension',
        'api_origin_id',
        'api_extra',
        'released_at',    
        'created_at',
        'updated_at'
    ];
 
    public static function print() {
        return self::get();
    }

}