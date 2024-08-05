<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('muscle_groups') -> insert([
            'title' => 'Arms',
            'image' => 'https://www.garagegymreviews.com/wp-content/uploads/IsolationExercises_12.jpeg',
            'description' => 'image of an arm',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
