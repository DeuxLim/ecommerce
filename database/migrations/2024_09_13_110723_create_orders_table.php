<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Users\User;
use App\Models\Users\PaymentMethod;
use App\Models\Users\UserAddress;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignIdFor(User::class)->onDelete('cascade'); // Foreign key to users table
            $table->foreignIdFor(PaymentMethod::class)->nullable()->onDelete('cascade'); // Foreign key to payment_methods table
            $table->foreignIdFor(UserAddress::class)->nullable()->onDelete('cascade'); // Foreign key to user_addresses table
            $table->decimal('total_amount', 10, 2); // Total amount for the order
            $table->string('status')->default('pending'); // Order status (pending, completed, etc.)
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
        Schema::dropIfExists('orders');
    }
};
