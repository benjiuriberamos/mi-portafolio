<?php

namespace Database\Seeders;

use App\Models\Cars;
use App\Models\Brands;
use App\Models\CarsCategories;
use App\Models\Categories;
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
        Categories::factory(10)->create();
        Brands::factory(10)->create();
        Cars::factory(10)->create();
        CarsCategories::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
