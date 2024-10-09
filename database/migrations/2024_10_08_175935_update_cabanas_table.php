<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCabanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('cabanas', function (Blueprint $table) {
        // Añadir la columna nivel_id que referencia a la tabla cabana_niveles
        $table->integer('nivel_id')->unsigned()->nullable(); // Hacerla opcional para evitar el error
        $table->foreign('nivel_id')->references('id')->on('cabana_niveles')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabanas', function (Blueprint $table) {
            // Eliminar la referencia a 'cabana_niveles'
            $table->dropForeign(['nivel_id']);
            $table->dropColumn('nivel_id');

            // Restaurar el campo 'nivel'
            $table->enum('nivel', ['VIP', 'Estándar', 'Económico']);
        });
    }
}
