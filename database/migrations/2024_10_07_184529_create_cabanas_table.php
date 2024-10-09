<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabanasTable extends Migration
{
    public function up()
    {
        Schema::create('cabanas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('nivel_id'); // Clave foránea a cabana_niveles
            $table->integer('aforo');
            $table->timestamps();

            // Definición de la clave foránea
            $table->foreign('nivel_id')->references('id')->on('cabana_niveles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cabanas');
    }
}
