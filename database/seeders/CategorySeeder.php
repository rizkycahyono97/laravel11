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
            'name' => 'Back End Developer',
            'slug' => 'test-slug-1',
            'color' => 'red'
        ]); 

        Category::create([
            'name' => 'UI UX',
            'slug' => 'test-slug-2',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'Front End Developer',
            'slug' => 'test-slug-3',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'DevSecOps Enginers',
            'slug' => 'test-slug-4',
            'color' => 'blue',
        ]);
    }
}
