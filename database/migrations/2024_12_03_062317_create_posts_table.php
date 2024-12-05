<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Blog title
            $table->string('slug')->unique(); // URL-friendly slug
            $table->string('featured_image')->nullable(); // Path to the featured image
            $table->longText('description'); // Blog description (HTML)
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
