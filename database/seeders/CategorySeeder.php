<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['category' => 'Творчество и дизайн'],
            ['category' => 'Интеллект и стратегия'],
            ['category' => 'Алгоритмы и соревнования'],
            ['category' => 'Лингвистика'],
            ['category' => 'Логика и программирование'],
            ['category'=>'Другое']
        ]);
    }
}
