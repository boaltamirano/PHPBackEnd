<?php

namespace Database\Seeders;

use App\Models\Ofertas;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OfertaSeeder::class);
        Ofertas::factory(7)
            ->has(User::factory(7)->count(3))
            ->create();
    }
}
