<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_customer', function (Blueprint $table) {
        $table->id('customer_id');
        $table->foreignId('user_id')->constrained('_user', 'user_id');
        $table->string('national_id', 20)->unique();
        $table->date('Date_of_contact')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_customer');
    }
};
