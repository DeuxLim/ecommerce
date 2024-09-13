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
        Schema::create('users_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);  
            $table->string('address_line_1'); // Primary address line
            $table->string('address_line_2')->nullable(); // Optional second address line
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code');
            $table->string('phone')->nullable(); // Optional phone number
            $table->boolean('is_default')->default(false); // Default flag
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
        Schema::dropIfExists('users_addresses');
    }
};
