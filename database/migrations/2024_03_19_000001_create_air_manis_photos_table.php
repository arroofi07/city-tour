<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('air_manis_photos', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('description')->nullable();
      $table->string('image_path');
      $table->integer('order')->default(0);
      $table->boolean('is_active')->default(true);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('air_manis_photos');
  }
};
