<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name' => 'Fiksi', 'description' => 'Kumpulan buku fiksi, novel, dan sastra'],
            ['name' => 'Teknologi', 'description' => 'Buku seputar IT, pemrograman, dan komputer'],
            ['name' => 'Sains', 'description' => 'Buku ilmu pengetahuan alam dan matematika'],
        ]);
    }
}