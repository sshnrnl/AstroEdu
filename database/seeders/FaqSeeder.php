<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Who is AstroEdu for?',
                'answer' => 'AstroEdu is designed for students, teachers, and parents interested in learning about astronomy and space sciences.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Is AstroEdu free?',
                'answer' => 'Yes, AstroEdu offers free resources and materials for users.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Do I need to create an account to use AstroEdu?',
                'answer' => 'Yes, creating an account is necessary to track progress and access personalized features.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Can parents or teachers monitor student’s progress?',
                'answer' => 'Yes, parents and teachers can access a dashboard to monitor the student’s progress and identify areas of improvement.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Can I use AstroEdu offline?',
                'answer' => 'Currently, AstroEdu requires an internet connection to access all features.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How can I contact customer support?',
                'answer' => 'For any inquiries, contact us at support@astroedu.com.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
