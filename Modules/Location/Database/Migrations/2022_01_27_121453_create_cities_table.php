<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('state_id'); // Correct foreign key column type
            $table->string('slug');
            $table->timestamps();

            // Foreign key constraint to 'states' table
            $table->foreign('state_id')
                  ->references('id')
                  ->on('states')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
