<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users\User>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = [
            'Electronics',
            'Computers & Accessories',
            'Cell Phones & Accessories',
            'Televisions',
            'Home Appliances',
            'Kitchen Appliances',
            'Smart Home Devices',
            'Cameras & Photography',
            'Audio & Headphones',
            'Wearable Technology',
            'Office Supplies',
            'Furniture',
            'Living Room Furniture',
            'Bedroom Furniture',
            'Office Furniture',
            'Outdoor Furniture',
            'Home Decor',
            'Lighting & Ceiling Fans',
            'Bedding & Mattresses',
            'Storage & Organization',
            'Kitchen & Dining',
            'Cookware',
            'Tableware',
            'Kitchen Storage & Organization',
            'Small Kitchen Appliances',
            'Health & Household',
            'Personal Care',
            'Medical Supplies',
            'Household Supplies',
            'Vitamins & Supplements',
            'Beauty & Personal Care',
            'Makeup',
            'Skincare',
            'Hair Care',
            'Fragrances',
            'Men\'s Clothing',
            'Men\'s Fashion',
            'Shirts',
            'Pants',
            'Suits & Blazers',
            'Jackets & Coats',
            'Shorts',
            'Activewear',
            'Jeans',
            'Men\'s Shoes',
            'Men\'s Accessories',
            'Women\'s Clothing',
            'Women\'s Fashion',
            'Dresses',
            'Tops',
            'Bottoms',
            'Outerwear',
            'Activewear',
            'Skirts',
            'Women\'s Shoes',
            'Women\'s Accessories',
            'Jewelry',
            'Watches',
            'Handbags',
            'Sunglasses',
            'Kids\' Clothing',
            'Baby Clothing',
            'Boys\' Clothing',
            'Girls\' Clothing',
            'Toys & Games',
            'Educational Toys',
            'Action Figures',
            'Dolls & Stuffed Animals',
            'Games & Puzzles',
            'Outdoor Play',
            'Books',
            'Fiction',
            'Non-Fiction',
            'Children\'s Books',
            'Textbooks',
            'eBooks',
            'Movies & TV',
            'DVDs & Blu-ray',
            'Streaming Media Players',
            'Digital Music',
            'Musical Instruments',
            'Sports & Outdoors',
            'Fitness Equipment',
            'Outdoor Recreation',
            'Sports Apparel',
            'Camping & Hiking',
            'Cycling',
            'Automotive',
            'Car Electronics & GPS',
            'Car Care',
            'Parts & Accessories',
            'Tools & Equipment',
            'Industrial & Scientific',
            'Office Products',
            'Pet Supplies',
            'Groceries & Gourmet Food',
            'Health Foods',
            'Snacks',
            'Beverages',
            'Household Essentials',
            'DIY & Home Improvement',
            'Building Supplies',
            'Electrical',
            'Plumbing',
            'Paint & Supplies',
            'Gardening & Lawn Care',
        ];
        
        return [
            'name' => fake()->randomElement($categories),
        ];
    }
}
