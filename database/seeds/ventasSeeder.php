<?php

use Illuminate\Database\Seeder;
use App\venta;

class ventasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(venta::class, 10000)->create();
    }
}
