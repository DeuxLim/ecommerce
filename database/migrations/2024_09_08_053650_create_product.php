<?php

use App\Models\Users\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade'); // Foreign key for seller
            $table->foreignIdFor(Category::class)->nullable();; // Foreign key for seller
            $table->string('name'); // Product name
            $table->string('image')->nullable(); // Product image (nullable in case there's no image)
            $table->string('category'); // Product category/tag
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 8, 2); // Product price (up to 999,999.99)
            $table->integer('quantity'); // Available quantity
            $table->boolean('pre_order')->default(false); // Pre-order status
            $table->enum('condition', ['brandnew', 'used'])->default('brandnew'); // Product condition (brand new or used)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
