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
        $categories = [
            'Sembako', 
            'Minuman', 
            'Makanan Ringan', 
            'Kebutuhan Rumah Tangga'
        ];

        foreach ($categories as $name) {
            // firstOrCreate prevents duplicate records if the seeder is run multiple times
            Category::firstOrCreate(['name' => $name]);
        }    
    }
}