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
        Category::create(['name'=> 'Display Ads', 'slug' => 'display-ads']);
        Category::create(['name'=> 'Native Ads', 'slug' => 'native-ads']);
        Category::create(['name'=> 'Network Ads', 'slug' => 'network-ads']);
        Category::create(['name'=> 'Social Ads', 'slug' => 'social-ads']);
    }
}
