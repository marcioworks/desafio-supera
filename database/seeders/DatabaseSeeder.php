<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Users')->insert([
            'name' => 'admin',
            'email' => 'admin@teste.com',
            'password'=> Hash::make('admin'),
        ]);

        // Marcas
        DB::table('marcas')->insert([
            'nome' => 'Fiat',
        ]);
        DB::table('marcas')->insert([
            'nome' => 'Honda',
        ]);
        DB::table('marcas')->insert([
            'nome' => 'Hyndai',
        ]);
        DB::table('marcas')->insert([
            'nome' => 'Wolksvagem',
        ]);
        DB::table('marcas')->insert([
            'nome' => 'Chevrolet',
        ]);

        // Modelos
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

        // carros
        DB::table('carros')->insert([
            'user_id' => 1,
            'modelo_id' => 1,
            'placa'=> 'xyz1234',
            'cor' => 'Branco',
            'km' => 23000,
        ]);

        DB::table('carros')->insert([
            'user_id' => 1,
            'modelo_id' => 2,
            'placa'=> 'abc3456',
            'cor' => 'Preto',
            'km' => 0,
        ]);

        // Manutencoes
        DB::table('manutencoes')->insert([
            'user_id' => 1,
            'carro_id' => 1,
            'data_manutencao'=> Carbon::parse("2021-03-30"),
        ]);

        DB::table('manutencoes')->insert([
            'user_id' => 1,
            'carro_id' => 2,
            'data_manutencao'=> Carbon::parse("2021-04-01"),
        ]);

    }
}
