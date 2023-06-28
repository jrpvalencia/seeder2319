<?php

namespace Database\Seeders;
use App\Models\producto;

use Illuminate\Database\Seeder;

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

        producto::factory(75)->create();
    }
}
