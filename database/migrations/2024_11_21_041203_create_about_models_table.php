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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('full_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('address')->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_models');
    }
};
