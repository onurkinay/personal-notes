<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
use App\Models\Job; 
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
        //then run "php artisan db:seed"
        

        Employer::factory(10)->create([ 'name' => fake()->name()]);

        Job::factory(10)->create();

    }
}
