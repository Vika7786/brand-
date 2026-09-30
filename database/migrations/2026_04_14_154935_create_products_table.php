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
            $table->string('name')->nullable();
            $table->string('picture')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->string('status')->nullable();
            $table->string('link')->nullable();
            $table->string('lang')->nullable();
            $table->string('price')->nullable();
            $table->unsignedInteger('v_nalishii')->default(1);
            $table->enum('zakaz', [0,1])->default(1);;
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
