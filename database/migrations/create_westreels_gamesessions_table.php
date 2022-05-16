<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gamesessions', function (Blueprint $table) {
            $table->id('id')->index();
            $table->string('game_id', 100);
            $table->string('player_id', 100)->nullable();
            $table->string('currency', 20)->default('USD');
            $table->string('game_id_original', 355);
            $table->string('token_internal', 255);
            $table->string('token_original', 355);
            $table->string('extra_meta', 355)->nullable();
            $table->integer('games_amount');
            $table->boolean('expired_bool');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
    
};