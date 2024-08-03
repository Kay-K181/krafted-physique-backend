<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleGroupSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    
        DB::table('muscle_groups')->insert([
            [
                'Title' => "Chest",
                'URL' => "https://www.garagegymreviews.com/wp-content/uploads/IsolationExercises_15.jpeg",
                'Description' => "image of a chest"
            ],
            [
                'Title' => "Back",
                'URL' => "https://www.garagegymreviews.com/wp-content/uploads/IsolationExercises_16.jpeg",
                'Description' => "image of a back"
            ],
            [
                'Title' => "Legs",
                'URL' => "https://www.garagegymreviews.com/wp-content/uploads/IsolationExercises_8.jpeg",
                'Description' => "image of legs"
            ],
            [
                'Title' => "Shoulders",
                'URL' => "https://www.garagegymreviews.com/wp-content/uploads/IsolationExercises_17.jpeg",
                'Description' => "image of shoulders"
            ],
        ]);  
    }
}
