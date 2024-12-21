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
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('hiretext')->nullable();
            $table->string('hirelink')->nullable();
            $table->string('cvtext')->nullable();
            $table->string('cvlink')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_models');
    }
};
