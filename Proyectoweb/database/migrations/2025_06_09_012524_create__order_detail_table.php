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
        Schema::create('_order_detail', function (Blueprint $table) {
        $table->id('detail_id');
        $table->foreignId('order_id')->constrained('_order', 'order_id');
        $table->foreignId('product_id')->constrained('_product', 'product_id');
        $table->integer('Quantity');
        $table->decimal('Unit_price', 10, 2);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_order_detail');
    }
};
