<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Design;

class DesignSeeder extends Seeder
{
    public function run(): void
    {
        Design::create([
            'designer_id' => 5,
            'category_id' => 1,
            'title' => 'Modern Living Room',
            'description' => 'A sleek and stylish living space with a focus on neutral tones and minimalism.',
            'image' => 'room.jpg',
        ]);

        Design::create([
            'designer_id' => 2,
            'category_id' => 1,
            'title' => 'Cozy Bedroom',
            'description' => 'A warm and inviting bedroom with layered textures for ultimate comfort.',
            'image' => 'bedroom.jpg',
        ]);

        Design::create([
            'designer_id' => 1,
            'category_id' => 2,
            'title' => 'Elegant Dining Area',
            'description' => 'A luxurious dining space with a glass table and gold accents.',
            'image' => 'dining.jpg',
        ]);

        Design::create([
            'designer_id' => 3,
            'category_id' => 3,
            'title' => 'Contemporary Kitchen',
            'description' => 'An open kitchen design with modern cabinetry and sleek finishes.',
            'image' => 'kitchen.jpg',
        ]);

        Design::create([
            'designer_id' => 2,
            'category_id' => 5,
            'title' => 'Minimalist Office',
            'description' => 'A clutter-free workspace with natural light and ergonomic furniture.',
            'image' => 'office.jpg',
        ]);

        Design::create([
            'designer_id' => 5,
            'category_id' => 4,
            'title' => 'Chic Bathroom',
            'description' => 'A spa-like bathroom featuring marble finishes and warm lighting.',
            'image' => 'bathroom.jpg',
        ]);

        Design::create([
            'designer_id' => 3,
            'category_id' => 6,
            'title' => 'Outdoor Patio',
            'description' => 'A relaxing patio with wooden decking, plants, and ambient lighting.',
            'image' => 'patio.jpg',
        ]);

        Design::create([
            'designer_id' => 4,
            'category_id' => 1,
            'title' => 'Kids’ Playroom',
            'description' => 'A colorful and safe playroom filled with storage and playful decor.',
            'image' => 'playroom.jpg',
        ]);

        Design::create([
            'designer_id' => 1,
            'category_id' => 4,
            'title' => 'Industrial Loft',
            'description' => 'A loft with exposed brick walls, metal beams, and a modern urban vibe.',
            'image' => 'loft.jpg',
        ]);

        Design::create([
            'designer_id' => 4,
            'category_id' => 5,
            'title' => 'Scandinavian Hallway',
            'description' => 'A bright hallway with light wood flooring and minimal decor touches.',
            'image' => 'hallway.jpg',
        ]);

        Design::create([
            'designer_id' => 5,
            'category_id' => 1,
            'title' => 'Bohemian Reading Nook',
            'description' => 'A cozy corner with vibrant textiles, floor cushions, and plants.',
            'image' => 'reading.jpg',
        ]);

        Design::create([
            'designer_id' => 2,
            'category_id' => 1,
            'title' => 'Modern Workspace',
            'description' => 'A sleek office setup with smart storage, ergonomic seating, and task lighting.',
            'image' => 'workspace.jpg',
        ]);

        Design::create([
            'designer_id' => 3,
            'category_id' => 3,
            'title' => 'Rustic Balcony',
            'description' => 'An intimate outdoor space with wooden furniture and greenery.',
            'image' => 'balcony.jpg',
        ]);

        Design::create([
            'designer_id' => 1,
            'category_id' => 1,
            'title' => 'Luxury Walk-in Closet',
            'description' => 'An elegant closet design featuring custom cabinetry and full-length mirrors.',
            'image' => 'closet.jpg',
        ]);

        Design::create([
            'designer_id' => 2,
            'category_id' => 5,
            'title' => 'Artistic Studio',
            'description' => 'A creative studio filled with natural light, open shelving, and inspiration boards.',
            'image' => 'studio.jpg',
        ]);
    }
}