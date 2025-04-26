<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // State name
            $table->unsignedBigInteger('country_id')->nullable(); // Country ID, nullable in case some states don't belong to a country
            $table->string('slug')->nullable(); // Slug for SEO or URL usage
            $table->timestamps(); // Timestamps for created_at and updated_at

            // Add foreign key constraint
            $table->foreign('country_id') // Create foreign key
                  ->references('id') // Reference to the `id` column of the `countries` table
                  ->on('countries') // The `countries` table
                  ->onDelete('cascade'); // Cascade delete if country is deleted
        });
    }

    public function down()
    {
        Schema::dropIfExists('states'); // Drop the states table if it exists
    }
};
