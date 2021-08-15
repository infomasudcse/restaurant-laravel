<?php

namespace Database\Seeders;
use App\Models\Foodcategory;

use Illuminate\Database\Seeder;
use Database\Factories\Food;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //  \App\Models\User::factory(10)->create();


      
      Foodcategory::factory()->count(5)->hasFoods(2)->create();
/*

         \App\Models\Foodcategory::factory(5)->create();
         \App\Models\Food::factory(5)->create();*/
    }
}
