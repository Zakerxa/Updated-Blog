<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        Category::create([
            'id' => 6,
            'name' => 'LocalNews',
            'slug' => 'Local_News'
        ]);
        Category::create([
            'id' => 10,
            'name' => 'Entertainment',
            'slug' => 'Entertainment'
        ]);
        Category::create([
            'id' => 11,
            'name' => 'Knowledge',
            'slug' => 'Knowledge'
        ]);
        Category::create([
            'id' => 12,
            'name' => 'Health',
            'slug' => 'Health'
        ]);
    }
}
