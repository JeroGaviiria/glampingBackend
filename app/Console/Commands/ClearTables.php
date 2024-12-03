<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ClearTables extends Command
{
    protected $signature = 'db:clear';  // Nombre del comando
    protected $description = 'Vaciar todas las tablas y resetear las secuencias';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Desactivar las claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        // Vaciar tablas
        DB::table('usuarios')->truncate();
        DB::table('cabana_niveles')->truncate();
        DB::table('cabanas')->truncate();
        DB::table('servicios')->truncate();
        DB::table('cabana_servicios')->truncate();
        DB::table('reservas')->truncate();
        DB::table('tokens')->truncate();
        // Agrega aquí las demás tablas

        // Resetear AUTO_INCREMENT
        DB::statement('ALTER TABLE usuarios AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE cabana_niveles AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE cabanas AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE servicios AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE cabana_servicios AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE reservas AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE tokens AUTO_INCREMENT = 1;');
        
        // Agrega aquí las demás tablas con AUTO_INCREMENT

        // Volver a activar las claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        $this->info('Las tablas han sido vaciadas y las secuencias reiniciadas.');
    }
}
