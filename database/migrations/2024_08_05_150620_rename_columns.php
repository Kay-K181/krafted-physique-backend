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
        Schema::table('muscle_groups', function (Blueprint $table) {
            $table->renameColumn('Title', 'title');
            $table->renameColumn('URL', 'image');
            $table->renameColumn('Description', 'description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('muscle_groups', function (Blueprint $table) {
            $table->renameColumn('title', 'Title');
            $table->renameColumn('image', 'URL');
            $table->renameColumn('description', 'Description');
        });
    }
};
