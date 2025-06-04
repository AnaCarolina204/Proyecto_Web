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
        Schema::create('_order', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('customer_id')->constrained('_customer', 'customer_id');
            $table->foreignId('category_id')->constrained('_category', 'category_id');
            $table->date('order_date')->nullable();
            $table->string('OrderStatus', 50)->nullable();
            $table->string('priority', 20)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_order');
    }
};
