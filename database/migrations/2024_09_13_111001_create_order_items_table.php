<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Order;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignIdFor(Order::class)->onDelete('cascade'); // Foreign key to orders table
            $table->foreignIdFor(Product::class)->onDelete('cascade'); // Foreign key to products table
            $table->unsignedInteger('quantity'); // Quantity of the product in the order
            $table->decimal('unit_price', 10, 2); // Price per unit of the product
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
