<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan quiz
        $quizId = DB::table('quizzes')->insertGetId([
            'course_id' => 21, // ID course terkait
            'title' => 'Exploring the Wonders of Science',
            'description' => 'Test your basic science knowledge.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Tambahkan pertanyaan untuk quiz
        DB::table('questions')->insert([
            [
                'quiz_id' => $quizId,
                'question_text' => 'What is the chemical symbol for water?',
                'option_a' => 'H2O',
                'option_b' => 'O2',
                'option_c' => 'CO2',
                'option_d' => 'NaCl',
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $quizId,
                'question_text' => 'What planet is known as the Red Planet?',
                'option_a' => 'Earth',
                'option_b' => 'Mars',
                'option_c' => 'Jupiter',
                'option_d' => 'Venus',
                'correct_answer' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $quizId,
                'question_text' => 'What force keeps us on the ground?',
                'option_a' => 'Magnetism',
                'option_b' => 'Gravity',
                'option_c' => 'Friction',
                'option_d' => 'Inertia',
                'correct_answer' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $quizId,
                'question_text' => 'Which gas do plants use for photosynthesis?',
                'option_a' => 'Oxygen',
                'option_b' => 'Carbon Dioxide',
                'option_c' => 'Nitrogen',
                'option_d' => 'Hydrogen',
                'correct_answer' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $quizId,
                'question_text' => 'What is the center of an atom called?',
                'option_a' => 'Proton',
                'option_b' => 'Electron',
                'option_c' => 'Nucleus',
                'option_d' => 'Neutron',
                'correct_answer' => 'C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);        
    }
}
