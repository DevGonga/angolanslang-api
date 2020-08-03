<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class sound extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('sound', function (Blueprint $table) {
            $table->id('id');
            $table->string('sound_url');
            $table->string('type');
            $table->string('genre');
            $table->foreignId('sounds_id')->references('id')->on('sounds');
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
        //
    }
}
