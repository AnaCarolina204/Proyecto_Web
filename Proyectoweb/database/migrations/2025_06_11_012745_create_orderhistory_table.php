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
        Schema::create('orderhistory', function (Blueprint $table) {
             $table->id('order_history_id');
            $table->foreignId('order_id')->constrained('_order', 'order_id');
            $table->dateTime('change_date');
            $table->string('previous_status', 50)->nullable();
            $table->string('new_status', 50);
            $table->string('modified_by', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderhistory');
    }
};
