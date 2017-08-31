<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('ID_VENTAS');
            $table->integer('ID_C');
            $table->foreign('ID_C')->references('ID_CLIENTE')->on('clientes');
            $table->integer('ID_P');
            $table->foreign('ID_P')->references('ID_PRODUCTO')->on('productos');
            $table->integer('CANTIDAD');
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
        Schema::drop('ventas');
    }
}
