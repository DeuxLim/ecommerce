<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create top-level categories
        $electronics = Category::create(['name' => 'Electronics']);
        $homeAndGarden = Category::create(['name' => 'Home & Garden']);
        $clothing = Category::create(['name' => 'Clothing']);
        $toysAndGames = Category::create(['name' => 'Toys & Games']);
        $books = Category::create(['name' => 'Books']);
        $sportsOutdoors = Category::create(['name' => 'Sports & Outdoors']);
        $automotive = Category::create(['name' => 'Automotive']);
        $healthHousehold = Category::create(['name' => 'Health & Household']);

        // Electronics Sub-Categories
        $cellPhones = Category::create(['name' => 'Cell Phones & Accessories', 'parent_id' => $electronics->id]);
        $computers = Category::create(['name' => 'Computers & Accessories', 'parent_id' => $electronics->id]);
        $homeAppliances = Category::create(['name' => 'Home Appliances', 'parent_id' => $electronics->id]);

        $smartphones = Category::create(['name' => 'Smartphones', 'parent_id' => $cellPhones->id]);
        $casesCovers = Category::create(['name' => 'Cases & Covers', 'parent_id' => $cellPhones->id]);
        $laptops = Category::create(['name' => 'Laptops', 'parent_id' => $computers->id]);
        $desktops = Category::create(['name' => 'Desktops', 'parent_id' => $computers->id]);
        $monitors = Category::create(['name' => 'Monitors', 'parent_id' => $computers->id]);

        // Home & Garden Sub-Categories
        $kitchenAndDining = Category::create(['name' => 'Kitchen & Dining', 'parent_id' => $homeAndGarden->id]);
        $furniture = Category::create(['name' => 'Furniture', 'parent_id' => $homeAndGarden->id]);

        $cookware = Category::create(['name' => 'Cookware', 'parent_id' => $kitchenAndDining->id]);
        $tableware = Category::create(['name' => 'Tableware', 'parent_id' => $kitchenAndDining->id]);
        $livingRoomFurniture = Category::create(['name' => 'Living Room Furniture', 'parent_id' => $furniture->id]);
        $bedroomFurniture = Category::create(['name' => 'Bedroom Furniture', 'parent_id' => $furniture->id]);

        // Clothing Sub-Categories
        $menClothing = Category::create(['name' => 'Men\'s Clothing', 'parent_id' => $clothing->id]);
        $womenClothing = Category::create(['name' => 'Women\'s Clothing', 'parent_id' => $clothing->id]);
        $kidsClothing = Category::create(['name' => 'Kids\' Clothing', 'parent_id' => $clothing->id]);

        $shirts = Category::create(['name' => 'Shirts', 'parent_id' => $menClothing->id]);
        $pants = Category::create(['name' => 'Pants', 'parent_id' => $menClothing->id]);
        $suitsBlazers = Category::create(['name' => 'Suits & Blazers', 'parent_id' => $menClothing->id]);
        $jacketsCoats = Category::create(['name' => 'Jackets & Coats', 'parent_id' => $menClothing->id]);
        $shorts = Category::create(['name' => 'Shorts', 'parent_id' => $menClothing->id]);
        $activewear = Category::create(['name' => 'Activewear', 'parent_id' => $menClothing->id]);
        $jeans = Category::create(['name' => 'Jeans', 'parent_id' => $menClothing->id]);
        $mensShoes = Category::create(['name' => 'Men\'s Shoes', 'parent_id' => $menClothing->id]);
        $mensAccessories = Category::create(['name' => 'Men\'s Accessories', 'parent_id' => $menClothing->id]);
        $sweaters = Category::create(['name' => 'Sweaters', 'parent_id' => $menClothing->id]);
        $poloShirts = Category::create(['name' => 'Polo Shirts', 'parent_id' => $menClothing->id]);

        $dresses = Category::create(['name' => 'Dresses', 'parent_id' => $womenClothing->id]);
        $tops = Category::create(['name' => 'Tops', 'parent_id' => $womenClothing->id]);
        $bottoms = Category::create(['name' => 'Bottoms', 'parent_id' => $womenClothing->id]);
        $outerwear = Category::create(['name' => 'Outerwear', 'parent_id' => $womenClothing->id]);
        $skirts = Category::create(['name' => 'Skirts', 'parent_id' => $womenClothing->id]);
        $womensShoes = Category::create(['name' => 'Women\'s Shoes', 'parent_id' => $womenClothing->id]);
        $womensAccessories = Category::create(['name' => 'Women\'s Accessories', 'parent_id' => $womenClothing->id]);
        $blouses = Category::create(['name' => 'Blouses', 'parent_id' => $womenClothing->id]);
        $cardigans = Category::create(['name' => 'Cardigans', 'parent_id' => $womenClothing->id]);

        // Toys & Games Sub-Categories
        $educationalToys = Category::create(['name' => 'Educational Toys', 'parent_id' => $toysAndGames->id]);
        $actionFigures = Category::create(['name' => 'Action Figures', 'parent_id' => $toysAndGames->id]);

        // Books Sub-Categories
        $fiction = Category::create(['name' => 'Fiction', 'parent_id' => $books->id]);
        $nonFiction = Category::create(['name' => 'Non-Fiction', 'parent_id' => $books->id]);

        // Sports & Outdoors Sub-Categories
        $fitnessEquipment = Category::create(['name' => 'Fitness Equipment', 'parent_id' => $sportsOutdoors->id]);
        $campingHiking = Category::create(['name' => 'Camping & Hiking', 'parent_id' => $sportsOutdoors->id]);

        // Automotive Sub-Categories
        $carElectronics = Category::create(['name' => 'Car Electronics & GPS', 'parent_id' => $automotive->id]);
        $carCare = Category::create(['name' => 'Car Care', 'parent_id' => $automotive->id]);

        // Health & Household Sub-Categories
        $personalCare = Category::create(['name' => 'Personal Care', 'parent_id' => $healthHousehold->id]);
        $medicalSupplies = Category::create(['name' => 'Medical Supplies', 'parent_id' => $healthHousehold->id]);
    }
}
