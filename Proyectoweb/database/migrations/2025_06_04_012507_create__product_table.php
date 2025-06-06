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
        Schema::create('_product', function (Blueprint $table) {
            $table->id('Product_id');
            $table->string('product_name', 100);
            $table->text('product_description')->nullable();
            $table->decimal('Production_cost', 10, 2);
            $table->decimal('Selling_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_product');
    }
};
