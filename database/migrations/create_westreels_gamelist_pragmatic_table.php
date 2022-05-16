<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gamelist_pragmatic', function (Blueprint $table) {
            $table->string('game_id', 55);
            $table->integer('id', true);
            $table->string('fullName', 55);
            $table->string('provider', 25);
            $table->string('thumbnail', 125)->nullable();
            $table->string('thumbnail_ext')->nullable();
            $table->integer('isRecommend')->default(0);
            $table->integer('isHot')->default(0);
            $table->integer('isNew')->default(0);
            $table->string('tags', 15)->nullable();
            $table->decimal('rtpDes', 4, 1);
            $table->integer('open')->default(1);
            $table->string('category', 15);
            $table->integer('order_rating')->default(5);
            $table->string('short_desc', 30)->nullable();
            $table->string('funplay', 7)->nullable();
            $table->string('api_extension', 155);
            $table->string('api_origin_id', 55)->nullable();
            $table->string('api_extra', 55)->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
            $table->date('released_at')->nullable();
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