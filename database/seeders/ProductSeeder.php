<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['category_id' => 1, 'name' => 'Modern Sofa', 'price' => 899.00, 'image' => 'sofa.jpg']);
        Product::create(['category_id' => 1, 'name' => 'Wooden Dining Table', 'price' => 1299.00, 'image' => 'dining-table.jpg']);
        Product::create(['category_id' => 1, 'name' => 'Leather Recliner', 'price' => 750.00, 'image' => 'recliner.jpg']);
        Product::create(['category_id' => 2, 'name' => 'Crystal Chandelier', 'price' => 420.00, 'image' => 'chandelier.jpg']);
        Product::create(['category_id' => 2, 'name' => 'Floor Lamp', 'price' => 199.00, 'image' => 'floor-lamp.jpg']);
        Product::create(['category_id' => 2, 'name' => 'Wall Sconce Light', 'price' => 145.00, 'image' => 'wall-sconce.jpg']);
        Product::create(['category_id' => 3, 'name' => 'Ceramic Vase', 'price' => 85.00, 'image' => 'ceramic-vase.jpg']);
        Product::create(['category_id' => 3, 'name' => 'Decorative Mirror', 'price' => 250.00, 'image' => 'mirror.jpg']);
        Product::create(['category_id' => 3, 'name' => 'Wooden Shelf Decor', 'price' => 130.00, 'image' => 'shelf-decor.jpg']);
        Product::create(['category_id' => 4, 'name' => 'Persian Rug', 'price' => 980.00, 'image' => 'persian-rug.jpg']);
        Product::create(['category_id' => 4, 'name' => 'Shaggy Carpet', 'price' => 350.00, 'image' => 'shaggy-carpet.jpg']);
        Product::create(['category_id' => 5, 'name' => 'Abstract Canvas Art', 'price' => 270.00, 'image' => 'abstract-art.jpg']);
        Product::create(['category_id' => 5, 'name' => 'Landscape Painting', 'price' => 320.00, 'image' => 'landscape.jpg']);
        Product::create(['category_id' => 6, 'name' => 'Linen Curtains', 'price' => 180.00, 'image' => 'linen-curtains.jpg']);
        Product::create(['category_id' => 6, 'name' => 'Blackout Blinds', 'price' => 220.00, 'image' => 'blackout-blinds.jpg']);
        Product::create(['category_id' => 6, 'name' => 'Sheer White Curtains', 'price' => 160.00, 'image' => 'sheer-curtains.jpg']);
        Product::create(['category_id' => 1, 'name' => 'Bookshelf', 'price' => 410.00, 'image' => 'bookshelf.jpg']);
        Product::create(['category_id' => 3, 'name' => 'Decorative Clock', 'price' => 140.00, 'image' => 'clock.jpg']);
        Product::create(['category_id' => 2, 'name' => 'Table Lamp', 'price' => 120.00, 'image' => 'table-lamp.jpg']);
        Product::create(['category_id' => 4, 'name' => 'Round Wool Rug', 'price' => 460.00, 'image' => 'wool-rug.jpg']);
    }
}
