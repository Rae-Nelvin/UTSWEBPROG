<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Database\Factories\BookCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::create([
            'book_id' => 1,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 1,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 1,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 2,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 2,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 2,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 4,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 4,
            'category_id' => 7
        ]);

        BookCategory::create([
            'book_id' => 5,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 5,
            'category_id' => 7
        ]);

        BookCategory::create([
            'book_id' => 6,
            'category_id' => 6
        ]);

        BookCategory::create([
            'book_id' => 6,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 7,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 7,
            'category_id' => 6
        ]);

        BookCategory::create([
            'book_id' => 8,
            'category_id' => 6
        ]);

        BookCategory::create([
            'book_id' => 8,
            'category_id' => 8
        ]);

        BookCategory::create([
            'book_id' => 9,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 9,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 9,
            'category_id' => 7
        ]);

        BookCategory::create([
            'book_id' => 9,
            'category_id' => 8
        ]);

        BookCategory::create([
            'book_id' => 10,
            'category_id' => 5
        ]);

        BookCategory::create([
            'book_id' => 10,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 10,
            'category_id' => 2
        ]);
    }
}
