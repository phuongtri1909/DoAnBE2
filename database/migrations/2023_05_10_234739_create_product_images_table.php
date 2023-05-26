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
<<<<<<< HEAD
<<<<<<< HEAD:database/migrations/2023_05_10_234739_create_product_images_table.php
        Schema::create('product_images', function (Blueprint $table) {
=======
        Schema::create('homes', function (Blueprint $table) {
>>>>>>> nguyenPhuongTri:database/migrations/2023_05_16_004031_create_homes_table.php
=======
        Schema::create('product_images', function (Blueprint $table) {
>>>>>>> nguyenPhuongTri
            $table->id();
            $table->string('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD:database/migrations/2023_05_10_234739_create_product_images_table.php
        Schema::dropIfExists('product_images');
=======
        Schema::dropIfExists('homes');
>>>>>>> nguyenPhuongTri:database/migrations/2023_05_16_004031_create_homes_table.php
=======
        Schema::dropIfExists('product_images');
>>>>>>> nguyenPhuongTri
    }
};