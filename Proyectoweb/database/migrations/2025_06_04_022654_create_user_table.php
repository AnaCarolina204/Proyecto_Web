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
        Schema::create('_user', function (Blueprint $table) {
        $table->id('user_id');
        $table->string('name', 100);
        $table->string('email', 100)->unique();
        $table->string('password', 255);
        $table->foreignId('rol_id')->constrained('_rol', 'id_rol');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
