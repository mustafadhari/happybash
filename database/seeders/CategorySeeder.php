<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Events']);
        Category::create(['name' => 'Food']);
        Category::create(['name' => 'Activity']);
        Category::create(['name' => 'Snacks']);
        Category::create(['name' => 'Shows']);
        Category::create(['name' => 'DJ']);
        Category::create(['name' => 'Host']);
    }
}
