<?php

namespace Westreels\WestreelsMain\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class EntryTokens extends Eloquent  {
      
    protected $table = 'entry_tokens';
    protected $timestamp = true;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'entry_token',
        'entry_nonce',
        'player_token',
        'game_id',
        'extra_meta',
        'used',
        'created_at',
        'updated_at'
    ];
 
    public static function print() {
        return self::get();
    }

}