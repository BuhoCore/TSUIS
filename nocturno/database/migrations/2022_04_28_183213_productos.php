<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function (Blueprint $table) {


            $table->engine="InnoDB";
            $table->bigIncrements('id');
        
            $table->bigInteger('categoriasproductos_id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('precio');
          
            $table->timestamps();
            $table->foreign('categoriasproductos_id')->references('id')->on('categoriasproductos')->onDelete("cascade");
        
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
