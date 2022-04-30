<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartillas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cartillas', function (Blueprint $table) {


            $table->engine="InnoDB";
            $table->bigIncrements('id');
        
            $table->bigInteger('animales_id')->unsigned();
            $table->string('nombre');
            $table->string('nacimiento');
            $table->string('peso');

          
            $table->timestamps();
            $table->foreign('animales_id')->references('id')->on('animales')->onDelete("cascade");
        
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
