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
        Schema::create('vehiclelist', function (Blueprint $table) {
            $table->string('vin');
            $table->string('brand-model');
            $table->string('body_style');
            $table->string('color');
            $table->string('price');
            $table->string('stock');
            $table->string('engine');
            $table->string('transmission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiclelist');
    }
};
