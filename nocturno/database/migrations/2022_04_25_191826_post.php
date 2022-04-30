<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
     Schema::create('posts', function (Blueprint $table) {
         $table->bigIncrements('id');
            $table->string('title');
            $table->string('num');
            $table->string('body');
         $table->timestamps();
     });
        //
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
