<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabanaServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('cabana_servicios', function (Blueprint $table) {
            $table->unsignedBigInteger('cabana_id');
            $table->unsignedBigInteger('servicio_id');
            $table->primary(['cabana_id', 'servicio_id']);
            $table->foreign('cabana_id')->references('id')->on('cabanas')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cabana_servicios');
    }
}

