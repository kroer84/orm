<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

         $this->call(clienteseeder::class);
         $this->call(productoSeeder::class);
         $this->call(ventasSeeder::class);
        //Model::reguard();
    }
}
