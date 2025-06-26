<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('tourist_spots', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->text('description');
      $table->string('short_description', 200);
      $table->string('image')->nullable();
      $table->json('gallery')->nullable();
      $table->string('location');
      $table->decimal('price', 10, 2)->default(0);
      $table->decimal('rating', 3, 1)->default(0);
      $table->string('category');
      $table->json('facilities')->nullable();
      $table->string('contact')->nullable();
      $table->string('opening_hours')->nullable();
      $table->boolean('is_featured')->default(false);
      $table->boolean('is_active')->default(true);
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('tourist_spots');
  }
};
