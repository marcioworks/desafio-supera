<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('carros', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('modelo_id');
        $table->string('placa', 7)->unique();
        $table->string('cor');
        $table->integer('km');
        $table->timestamps();

        //foreign key (constraints)
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('modelo_id')->references('id')->on('modelos');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
