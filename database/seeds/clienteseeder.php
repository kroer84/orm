<?php

use Illuminate\Database\Seeder;
use App\clientes;

class clienteseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(clientes::class, 20)->create();
    }
}
