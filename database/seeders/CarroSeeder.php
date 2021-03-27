<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carros')->insert([
            'user_id' => 1,
            'modelo_id' => 1,
            'placa'=> 'xyz1234',
            'cor' => 'Branco',
            'km' => 23000,
        ]);
    }
}
