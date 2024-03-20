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
        Schema::create('buyerlist', function (Blueprint $table) {
            $table->string('buyerID')->primary();
            $table->string('Picture')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('gender');
            $table->integer('annual_income');
            $table->string('buyer_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyerlist');
    }
};
