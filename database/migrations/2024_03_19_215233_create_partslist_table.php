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
        Schema::create('partslist', function (Blueprint $table) {
            $table->string('partID')->primary();
            $table->string('image')->nullable();
            $table->string('part_name');
            $table->string('compatibility');
            $table->string('price');
            $table->string('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partslist');
    }
};
