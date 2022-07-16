<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
        [
            'exam_title' => 'Championship Exam 1',
            'exam_datetime' => now(),
            'duration' => 10,
            'total_question' => 10,
            'marks_per_right_answer' => 1,
            'exam_code' => 'C1',
            'status' => 'Active',
            'exam_type' => 'Championship',
            'price' => 100,
            'subscription' => 'free',
        ],
        [
            'exam_title' => 'Championship Exam 2',
            'exam_datetime' => now(),
            'duration' => 20,
            'total_question' => 20,
            'marks_per_right_answer' => 2,
            'exam_code' => 'C2',
            'status' => 'Active',
            'exam_type' => 'Championship',
            'price' => 100,
            'subscription' => 'free',
        ],
        [
            'exam_title' => 'Championship Practice 1',
            'exam_datetime' => now(),
            'duration' => 10,
            'total_question' => 10,
            'marks_per_right_answer' => 1,
            'exam_code' => 'CP1',
            'status' => 'Active',
            'exam_type' => 'Practice',
            'price' => 100,
            'subscription' => 'free',
        ],
        [
            'exam_title' => 'Championship Practice 2',
            'exam_datetime' => now(),
            'duration' => 30,
            'total_question' => 30,
            'marks_per_right_answer' => 1,
            'exam_code' => 'CP2',
            'status' => 'Active',
            'exam_type' => 'Practice',
            'price' => 100,
            'subscription' => 'free',
        ],
        [
            'exam_title' => 'Job Practice 1',
            'exam_datetime' => now(),
            'duration' => 10,
            'total_question' => 10,
            'marks_per_right_answer' => 1,
            'exam_code' => 'J1',
            'status' => 'Active',
            'exam_type' => 'Job',
            'price' => 100,
            'subscription' => 'free',
        ],
        [
            'exam_title' => 'Job Practice 2',
            'exam_datetime' => now(),
            'duration' => 10,
            'total_question' => 10,
            'marks_per_right_answer' => 1,
            'exam_code' => 'J2',
            'status' => 'Active',
            'exam_type' => 'Job',
            'price' => 100,
            'subscription' => 'free',
        ],
        ]);
    }
}
