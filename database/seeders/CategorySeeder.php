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
        Category::create(['name'=> 'Display Ads']);
        Category::create(['name'=> 'Native Ads']);
        Category::create(['name'=> 'Network Ads']);
        Category::create(['name'=> 'Social Ads']);
    }
}
