<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'Exploring the Wonders of Science',
                'description' => 'Unlock the secrets of the universe...',
                'category' => 'Science',
                'duration' => '1 hr 20 min',
                'image' => 'Course/Learn1.png',
                'details' => 'This course dives deep into topics like atoms, ecosystems, and more.',
                'learning_points' => json_encode([
                    'Understand the basic needs of plants, animals, and humans.',
                    'Discover the water cycle and its role in life.',
                    'Learn about the solar system and Earth\'s place in it.',
                ]),
                'instructor_name' => 'Noah Benjamin',
                'instructor_image' => 'Course/Male.jpg',
                'instructor_bio' => 'A passionate science teacher with a degree in Environmental Science.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Amazing World of Reptiles',
                'description' => 'Dive into the fascinating world of reptiles and discover their unique characteristics, habitats, and survival techniques.',
                'category' => 'Science',
                'duration' => '1 hr 10 min',
                'image' => 'Course/Learn1.png',
                'details' => 'This course takes a closer look at reptiles like snakes, turtles, and lizards, teaching students about their features and roles in ecosystems.',
                'learning_points' => json_encode([
                    'Identify different types of reptiles and their habitats.',
                    'Learn about how reptiles adapt to their environments.',
                    'Understand the importance of reptiles in maintaining ecological balance.',
                ]),
                'instructor_name' => 'Jeremy Chris',
                'instructor_image' => 'Course/Male.jpg',
                'instructor_bio' => 'An animal enthusiast and science teacher with a passion for educating kids about wildlife.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Journey Through the Solar System',
                'description' => 'Take a thrilling trip through space to explore the planets, moons, and other celestial bodies in our solar system.',
                'category' => 'Science',
                'duration' => '1 hr 15 min',
                'image' => 'Course/Learn1.png',
                'details' => 'This course explores the wonders of the solar system, from the sun and planets to space exploration.',
                'learning_points' => json_encode([
                    'Understand the planets in the solar system and their unique characteristics.',
                    'Learn about the sun’s role as the center of our solar system.',
                    'Discover how scientists and astronauts explore outer space.',
                ]),
                'instructor_name' => 'Jennie Johnson',
                'instructor_image' => 'Course/Female.jpg',
                'instructor_bio' => 'A dedicated educator with a knack for making space science fun and accessible to young learners.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Building Strong Foundations: Basic Math Skills',
                'description' => 'This course introduces young learners to essential math skills such as addition, subtraction, and understanding numbers in a fun and engaging way.',
                'category' => 'Math',
                'duration' => '1 hr 30 min',
                'image' => 'Course/Learn2.png',
                'details' => 'Designed for elementary school students, this course helps build a strong foundation in basic math concepts through interactive videos and materials.',
                'learning_points' => json_encode([
                    'Master addition and subtraction techniques.',
                    'Understand numbers, place values, and basic counting.',
                    'Learn problem-solving skills using real-world examples.',
                ]),
                'instructor_name' => 'Liam Sanders',
                'instructor_image' => 'Course/Male.jpg',
                'instructor_bio' => 'A math educator with over 10 years of experience in elementary education, passionate about making numbers fun.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Shapes and Measurements: Fun with Geometry',
                'description' => 'Explore the world of shapes, measurements, and geometry with exciting activities designed for elementary students.',
                'category' => 'Math',
                'duration' => '1 hr 20 min',
                'image' => 'Course/Learn2.png',
                'details' => 'This course covers key geometry concepts like shapes, sizes, and simple measurements, helping students develop spatial awareness and mathematical reasoning.',
                'learning_points' => json_encode([
                    'Identify basic shapes like circles, squares, and triangles.',
                    'Learn how to measure objects using standard tools.',
                    'Understand the basics of symmetry and patterns.',
                ]),
                'instructor_name' => 'Evelyn Davis',
                'instructor_image' => 'Course/Female.jpg',
                'instructor_bio' => 'A passionate math teacher with a love for teaching geometry through hands-on activities and visuals.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Crack the Code: Introduction to Multiplication and Division',
                'description' => 'Unlock the secrets of multiplication and division with step-by-step guidance, visuals, and engaging exercises.',
                'category' => 'Math',
                'duration' => '1 hr 25 min',
                'image' => 'Course/Learn2.png',
                'details' => 'This course introduces multiplication and division in an easy-to-understand manner, focusing on building confidence and problem-solving skills.',
                'learning_points' => json_encode([
                    'Understand multiplication as repeated addition.',
                    'Learn division as splitting numbers into equal groups.',
                    'Solve simple word problems involving multiplication and division.',
                ]),
                'instructor_name' => 'Sophia Olivia',
                'instructor_image' => 'Course/Female.jpg',
                'instructor_bio' => 'An innovative educator specializing in early math skills, dedicated to helping students find joy in learning math.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Building Blocks of Language: Basic Grammar and Vocabulary',
                'description' => 'Help young learners strengthen their grammar and vocabulary skills through fun and interactive lessons.',
                'category' => 'English',
                'duration' => '1 hr 15 min',
                'image' => 'Course/Learn3.png',
                'details' => 'This course introduces elementary-level students to basic grammar rules and vocabulary building techniques, making language learning fun and accessible.',
                'learning_points' => json_encode([
                    'Learn the basic parts of speech, including nouns, verbs, and adjectives.',
                    'Build a strong vocabulary with commonly used words.',
                    'Understand how to form simple sentences and questions.',
                ]),
                'instructor_name' => 'Emily Paris',
                'instructor_image' => 'Course/Female.jpg',
                'instructor_bio' => 'A dedicated English teacher with a knack for making grammar simple and enjoyable for young learners.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Adventures in Reading: Comprehension and Storytelling',
                'description' => 'Ignite a love for reading with this course, teaching comprehension skills through engaging stories and exercises.',
                'category' => 'English',
                'duration' => '1 hr 20 min',
                'image' => 'Course/Learn3.png',
                'details' => 'This course focuses on developing reading comprehension skills and encouraging creativity through storytelling.',
                'learning_points' => json_encode([
                    'Improve reading comprehension through engaging short stories.',
                    'Learn how to identify main ideas, characters, and settings.',
                    'Develop storytelling skills by creating original narratives.',
                ]),
                'instructor_name' => 'Lucas Theodore',
                'instructor_image' => 'Course/Male.jpg',
                'instructor_bio' => 'A passionate English educator specializing in literacy and creative expression for young minds.',
                'instructor_scope' => 'Elementary School',
            ],
            [
                'title' => 'Speak with Confidence: English Communication Skills',
                'description' => 'Empower students to communicate clearly and confidently in English through practical speaking exercises.',
                'category' => 'English',
                'duration' => '1 hr 10 min',
                'image' => 'Course/Learn3.png',
                'details' => 'This course helps elementary students develop essential communication skills in English, focusing on speaking and listening.',
                'learning_points' => json_encode([
                    'Practice everyday conversations with simple sentences.',
                    'Learn correct pronunciation and intonation.',
                    'Build confidence in expressing thoughts and ideas in English.',
                ]),
                'instructor_name' => 'Jessica Lee',
                'instructor_image' => 'Course/Female.jpg',
                'instructor_bio' => 'An experienced English teacher passionate about helping young learners find their voice in the English language.',
                'instructor_scope' => 'Elementary School',
            ],
        ]);
    }
}
