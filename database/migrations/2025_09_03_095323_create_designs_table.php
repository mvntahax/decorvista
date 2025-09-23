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
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designer_id');
            $table->foreignId('category_id');
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamps();

            $table->foreign('designer_id')->references('id')->on('designers')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('design_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
