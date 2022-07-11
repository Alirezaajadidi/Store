<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create()->each(function ($u) {
            $u->posts()->saveMany(Factory::create() , 10);
         });
//        \App\Models\Post::factory(10)->create();


        //        \App\Models\User::factory(10)->create();
//        \App\Models\Post::factory(10)->create();

    }
}
