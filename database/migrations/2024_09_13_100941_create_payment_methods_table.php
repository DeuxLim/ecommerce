<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Users\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignIdFor(User::class)->onDelete('cascade'); // Foreign key to users table
            $table->string('card_type')->nullable(); // Card type (Visa, MasterCard, etc.)
            $table->string('card_last_four')->nullable(); // Last four digits of the card number
            $table->string('provider')->nullable(); // Payment provider (e.g., Stripe, PayPal)
            $table->string('payment_method_token')->unique(); // Token for secure transactions
            $table->boolean('is_default')->default(false); // Default payment method
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
        Schema::dropIfExists('payment_methods');
    }
};
