<?php

namespace Database\Seeders;

use App\Models\DesignCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DesignCategorySeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Living Rooms', 'Bedrooms', 'Kitchens', 'Bathrooms', 'Offices', 'Outdoor Spaces'] as $name) {
            DesignCategory::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
