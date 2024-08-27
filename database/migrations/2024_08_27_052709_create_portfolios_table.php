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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('client_name');
            $table->string('industry');
            $table->string('website')->nullable();
            $table->text('client_description')->nullable();
            $table->text('project_requirements')->nullable();
            $table->text('project_overview')->nullable();
            $table->text('solution')->nullable();
            $table->enum('client_satisfaction', ['Satisfied', 'Neutral', 'Dissatisfied']);
            $table->string('time_needed')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
