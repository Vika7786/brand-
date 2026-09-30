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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            //message, name, email
            $table->text('message');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->enum('showhide',['1','0'])->default('1');
            $table->integer('user_id')->nullable();
            $table->string('type')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
