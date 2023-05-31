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
        Category::create([
            "name" => [
                'uz' => 'Stol',
                'ru' => 'Стол'
            ],
            "icon" => "https://cdn.icon-icons.com/icons2/390/PNG/512/table_39455.png"
        ]);

        Category::create([
            "name" => [
                'uz' => 'Divan',
                'ru' => 'Диван'
            ],
            "icon" => 'https://cdn-icons-png.flaticon.com/512/1010/1010398.png'
        ]);

        Category::create([
            "name" => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло'
            ],
            "icon" => 'https://cdn-icons-png.flaticon.com/512/1510/1510001.png'
            ]);

            Category::create([
                "name" => [
                    'uz' => 'Yotoq',
                    'ru' => 'Кровать'
                ],
                "icon" => "https://cdn.icon-icons.com/icons2/2490/PNG/512/double_bed_icon_150149.png"
            ]);


            Category::create([
                "name" => [
                    'uz' => 'Stul',
                    'ru' => 'Стул'
                ],
                "icon" => "https://cdn-icons-png.flaticon.com/512/2237/2237431.png"
        ]);
    }
}
