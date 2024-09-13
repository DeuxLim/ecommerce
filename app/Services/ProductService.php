<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    /**
     * Create a new product.
     *
     * @param array $data
     * @param \App\Models\Users\User $user
     * @return \App\Models\Product
     */
    public function createProduct(array $data, $user)
    {
        // Handle file upload
        if (isset($data['image'])) {
            $imagePath = $data['image']->store('products', 'public');
            $data['image'] = "storage/{$imagePath}";
        }

        // Create and return the new product
        return Product::create([
            'name' => $data['name'],
            'image' => $data['image'] ?? null,
            'category' => $data['category'],
            'description' => $data['description'] ?? null,
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'pre_order' => $data['pre_order'],
            'condition' => $data['condition'],
            'user_id' => $user->id,
        ]);
    }

    // Additional business logic can be added here (updateProduct, deleteProduct, etc.)
}
