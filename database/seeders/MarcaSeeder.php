<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
