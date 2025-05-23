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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->enum('material', ['zlato', 'striebro', 'titanium']);
            $table->enum('stone_color', ['diamant', 'rubín', 'zafír', 'perla'])->nullable();
            $table->enum('purpose', ['ženy', 'muži', 'unisex']);
            $table->integer('quantity');
            $table->float('price');
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
