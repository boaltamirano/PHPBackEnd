<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfertaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\OfertaUser::factory(10)->create();
    }
}
