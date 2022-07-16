<?php

namespace Database\Factories;

use App\Models\Exam;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    protected $model = Exam::class;
    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */
    public function definition()
    {
        return [
            'exam_title' => $this->faker->title,
            'exam_datetime' => now(),
            'duration' => $this->faker->numberBetween(20,30),
            'total_question' => $this->faker->numberBetween(20,30),
            'marks_per_right_answer' => $this->faker->randomElement(['1' ,'2']),
            'exam_code' => $this->faker->randomElement(['CP1' ,'CP2' ,'C1', 'C2', 'J1','J2']),
            'status' => 'Active',
            'exam_type' => $this->faker->randomElement(['Practice' ,'Championship', 'Job']),
            'price' => 100,
            'subscription' => $this->faker->randomElement(['paid' ,'free', 'promotional']),
        ];
    }
}
