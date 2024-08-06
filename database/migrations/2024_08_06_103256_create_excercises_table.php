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
        Schema::create('excercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->unsignedTinyInteger('rating');
            $table->string('level');
            $table->string('equipment_type');
            $table->string('main_muscles_targeted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excercises');
    }
};
