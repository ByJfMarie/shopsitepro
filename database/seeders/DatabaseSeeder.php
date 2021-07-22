<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\OfferSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Import OfferSeeder
        $this->call(OfferSeeder::class);
    }
}
