<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Classic Watch',
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30',
                'price' => 29.99,
                'category' => 'Accessories',
                'description' => 'A stylish classic watch designed for daily use.',
            ],
            [
                'name' => 'Sport Sneakers',
                'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff',
                'price' => 49.99,
                'category' => 'Shoes',
                'description' => 'Comfortable sport sneakers designed for active lifestyle.',
            ],
            [
                'name' => 'Wireless Headphones',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e',
                'price' => 34.99,
                'category' => 'Electronics',
                'description' => 'High quality wireless headphones with a modern design.',
            ],
            [
                'name' => 'Smart Watch',
                'image' => 'https://images.unsplash.com/photo-1546868871-7041f2a55e12',
                'price' => 59.99,
                'category' => 'Electronics',
                'description' => 'A smart watch with useful daily features and a stylish look.',
            ],
            [
                'name' => 'Classic Leather Backpack',
                'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62',
                'price' => 55.99,
                'category' => 'Accessories',
                'description' => 'A stylish and durable leather backpack designed for daily use, school, work, and travel.',
            ],
            [
                'name' => 'Elegant Sunglasses',
                'image' => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083',
                'price' => 24.99,
                'category' => 'Accessories',
                'description' => 'Stylish sunglasses designed for everyday use with a modern and elegant look.',
            ],
            [
                'name' => 'Wireless Speaker',
                'image' => 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1',
                'price' => 39.99,
                'category' => 'Electronics',
                'description' => 'A compact wireless speaker with clear sound quality and modern design.',
            ],
            [
                'name' => 'Casual Sneakers',
                'image' => 'https://images.unsplash.com/photo-1491553895911-0055eca6402d',
                'price' => 49.99,
                'category' => 'Shoes',
                'description' => 'Casual sneakers with a clean design, suitable for everyday outfits.',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}