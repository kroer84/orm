<?php

use Illuminate\Database\Seeder;
use App\producto;


class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(producto::class, 20)->create();
    }
}
