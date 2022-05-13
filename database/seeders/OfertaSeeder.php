<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ofertas::factory(10)->create();
    }
}
