<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'tipo_user' => 1,
            'nome' => 'rosiane',
            'email' => 'rosiane9898@gmail.com',
            'senha' => '123456'
        ]);
    }
}
