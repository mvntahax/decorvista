<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('designers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('username', 100)->unique();
            $table->string('title', 100);
            $table->unsignedInteger('years_of_experience');
            $table->string('phone', 20)->nullable();
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('skill1', 100)->nullable();
            $table->string('skill2', 100)->nullable();
            $table->string('skill3', 100)->nullable();
            $table->string('skill4', 100)->nullable();
            $table->string('skill5', 100)->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designers');
    }
};
