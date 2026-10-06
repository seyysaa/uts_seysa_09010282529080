<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::insert([
            ['category_id' => 1, 'title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'publisher' => 'Hasta Mitra', 'year' => 1980, 'stock' => 10],
            ['category_id' => 2, 'title' => 'Belajar Laravel', 'author' => 'Taylor Otwell', 'publisher' => 'IT Press', 'year' => 2023, 'stock' => 25],
            ['category_id' => 2, 'title' => 'Mastering Tailwind', 'author' => 'Adam Wathan', 'publisher' => 'TechBooks', 'year' => 2022, 'stock' => 15],
            ['category_id' => 3, 'title' => 'Fisika Kuantum', 'author' => 'Albert Einstein', 'publisher' => 'Science Corp', 'year' => 1950, 'stock' => 5],
            ['category_id' => 1, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang Pustaka', 'year' => 2005, 'stock' => 20],
        ]);
    }
}