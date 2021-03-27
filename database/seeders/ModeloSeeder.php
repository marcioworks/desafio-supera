<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelos')->insert([
            'marca_id' => 1,
            'nome' => 'Uno',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);
        DB::table('modelos')->insert([
            'marca_id' => 1,
            'nome' => 'Mob',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 2,
            'nome' => 'Civic',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 2,
            'nome' => 'Fit',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 3,
            'nome' => 'HB20',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 4,
            'nome' => 'Gol',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 0,
            'abs'=> 0
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 4,
            'nome' => 'Polo',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 4,
            'nome' => 'UP',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 5,
            'nome' => 'Onix',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

        DB::table('modelos')->insert([
            'marca_id' => 5,
            'nome' => 'Cruze',
            'numero_portas'=> 4,
            'lugares' => 4,
            'air_bag' => 1,
            'abs'=> 1
        ]);

    }
}
