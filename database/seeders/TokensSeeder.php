<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokensSeeder extends Seeder
{
    public function run()
    {
        DB::table('tokens')->insert([
            ['usuario_id' => 1, 'token' => 'token_123'],
            ['usuario_id' => 2, 'token' => 'token_456'],
        ]);
    }
}
