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
        Schema::create('product_changes', function (Blueprint $table) {
            $table->id();
            $table->date('add_date')->nullable();
            $table->date('deletion_date')->nullable();
            $table->date('last_change')->nullable();

            $table->foreignId('id_product')->constrained('product')->onDelete('cascade');
            $table->foreignId('id_admin_add')->constrained('user');
            $table->foreignId('id_admin_deletion')->constrained('user');
            $table->foreignId('id_admin_change')->constrained('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_changes');
    }
};
