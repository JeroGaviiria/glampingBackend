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
            $table->enum('nivel', ['VIP', 'Estándar', 'Económico']);
            $table->integer('aforo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cabanas');
    }
}

