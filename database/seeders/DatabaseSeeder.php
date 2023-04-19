<?php

namespace Database\Seeders;

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
        $this->call([
            GuestUserSeeder::class,
            CategorySeeder::class,
            FoodSeeder::class,
            BeverageSeeder::class,
        ]);
    }
}
