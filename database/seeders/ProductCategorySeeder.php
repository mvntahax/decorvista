<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Furniture', 'Lighting', 'Decor', 'Rugs and Carpets', 'Wall Art', 'Curtain and Blinds'] as $name) {
            ProductCategory::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
