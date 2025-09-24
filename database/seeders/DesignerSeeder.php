<?php

namespace Database\Seeders;

use App\Models\Designer;
use Illuminate\Database\Seeder;

class DesignerSeeder extends Seeder
{
    public function run(): void
    {
        Designer::create([
            'name' => 'John Doe',
            'username' => 'jdoe',
            'title' => 'Junior Designer',
            'years_of_experience' => 2,
            'phone' => '0345-6789012',
            'email' => 'john@example.com',
            'address' => 'Rawalpindi, Pakistan',
            'description' => 'Creative and fresh perspectives in minimalistic interior layouts. Each design embraces simplicity while highlighting elegance in the details. We believe in crafting spaces that feel open, calming, and timeless. Natural light, clean lines, and subtle tones shape every composition. Our approach balances functionality with modern aesthetic appeal. The result is an interior that inspires comfort, clarity, and harmony.',
            'skill1' => 'Minimalist Design',
            'skill2' => 'SketchUp',
            'skill3' => 'Rendering',
            'skill4' => 'Client Communication',
            'skill5' => 'Project Management',
            'image' => 'john.jpg',
        ]);

        Designer::create([
            'name' => 'Ayesha Khan',
            'username' => 'ayeshak',
            'title' => 'Interior Designer',
            'years_of_experience' => 5,
            'phone' => '0300-1234567',
            'email' => 'ayesha@example.com',
            'address' => 'Lahore, Pakistan',
            'description' => 'Passionate about creating modern yet comfortable spaces for homes and offices.Passionate about creating modern yet comfortable spaces for homes and offices. Each design blends functionality with clean, contemporary aesthetics. Warmth and comfort are prioritized without compromising on style. Spaces are tailored to enhance productivity in offices and relaxation in homes. Attention to detail ensures harmony between practicality and beauty. The goal is to craft environments that feel inviting, inspiring, and timeless.',
            'skill1' => '3D Visualization',
            'skill2' => 'Modern Design',
            'skill3' => 'Furniture Selection',
            'skill4' => 'Lighting Design',
            'skill5' => 'Color Theory',
            'image' => 'ayesha.jpg',
        ]);

        Designer::create([
            'name' => 'Sara Ali',
            'username' => 'saraali',
            'title' => 'Furniture Designer',
            'years_of_experience' => 7,
            'phone' => '0321-4567890',
            'email' => 'sara@example.com',
            'address' => 'Islamabad, Pakistan',
            'description' => 'Focused on crafting elegant, durable, and ergonomic furniture pieces. Each design combines timeless aesthetics with practical functionality. Durability is ensured through premium materials and expert craftsmanship. Ergonomic principles guide the creation of comfortable daily use. Furniture is designed to adapt seamlessly to modern lifestyles. The result is a perfect balance of beauty, strength, and comfort.',
            'skill1' => 'Woodworking',
            'skill2' => 'Ergonomics',
            'skill3' => 'CAD Modeling',
            'skill4' => 'Fabric Selection',
            'skill5' => 'Detailing',
            'image' => 'sara.jpg',
        ]);

        Designer::create([
            'name' => 'Fatima Noor',
            'username' => 'fatimanoor',
            'title' => 'Luxury Interior Expert',
            'years_of_experience' => 10,
            'phone' => '0332-1122334',
            'email' => 'fatima@example.com',
            'address' => 'Multan, Pakistan',
            'description' => 'Specializes in luxury interiors with a focus on elegance and comfort. Every detail is thoughtfully curated to reflect sophistication and style. Spaces are designed to balance refined aesthetics with modern living. Premium materials and timeless palettes enhance a sense of exclusivity. Comfort is woven seamlessly into the beauty of each unique design. The result is a home that embodies both luxury and effortless harmony.',
            'skill1' => 'Luxury Design',
            'skill2' => 'Material Selection',
            'skill3' => 'Lighting Concepts',
            'skill4' => 'Project Management',
            'skill5' => 'Custom Furniture',
            'image' => 'fatima.jpg',
        ]);

        Designer::create([
            'name' => 'Michael Smith',
            'username' => 'msmith',
            'title' => 'Senior Architect',
            'years_of_experience' => 12,
            'phone' => '0301-9876543',
            'email' => 'michael@example.com',
            'address' => 'Karachi, Pakistan',
            'description' => 'Expert in large-scale residential and commercial design projects.Expert in large-scale residential and commercial design projects. Transforming ambitious concepts into functional, aesthetic realities. Specializing in modern layouts that maximize both space and flow. Combining innovation with sustainable and practical design solutions. Experienced in coordinating diverse teams and complex requirements. Delivering timeless environments that inspire living, working, and growth.',
            'skill1' => 'Architectural Planning',
            'skill2' => 'Space Optimization',
            'skill3' => 'Sustainable Design',
            'skill4' => 'AutoCAD',
            'skill5' => 'Team Leadership',
            'image' => 'michael.jpg',
        ]);
    }
}
