<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Fantasy'
        ]);

        Category::create([
            'name' => 'Science Fiction'
        ]);

        Category::create([
            'name' => 'Dystopian'
        ]);

        Category::create([
            'name' => 'Adventure'
        ]);

        Category::create([
            'name' => 'Romance'
        ]);

        Category::create([
            'name' => 'Horror'
        ]);

        Category::create([
            'name' => 'Mystery'
        ]);

        Category::create([
            'name' => 'Thriller'
        ]);

        Category::create([
            'name' => 'History'
        ]);
    }
}
