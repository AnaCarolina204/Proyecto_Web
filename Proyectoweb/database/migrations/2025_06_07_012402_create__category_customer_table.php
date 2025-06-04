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
        Schema::create('_category_customer', function (Blueprint $table) {
           $table->foreignId('customer_id')->constrained('_customer', 'customer_id');
            $table->foreignId('category_id')->constrained('_category', 'category_id');
            $table->primary(['customer_id', 'category_id'], 'category_customer_primary_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_category_customer');
    }
};
