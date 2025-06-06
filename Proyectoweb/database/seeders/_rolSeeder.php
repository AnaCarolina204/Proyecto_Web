<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class _rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('_rol')->insert([
            ['rol_name' => 'Cliente'],
            ['rol_name' => 'Operador'],
            ['rol_name' => 'Marketing'],
            ['rol_name' => 'Administrador'],
        ]);
    }
}
