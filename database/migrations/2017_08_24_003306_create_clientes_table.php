<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NOMBRE_CLIENTE')->unique();;
            $table->integer('ESTADO')->default(1);
            $table->date('FECHA_ENTRADA');
            $table->time('HORA_ENTRADA');
            $table->time('HORA_SALIDA')->nullable()->default('NULL');
            $table->timestamps();
        });
    }   



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
