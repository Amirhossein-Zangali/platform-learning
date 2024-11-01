<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courses = [
            'آموزش PHP' => 'این دوره به شما کمک می‌کند تا با مفاهیم اولیه PHP آشنا شوید.',
            'آموزش Laravel' => 'در این دوره به یادگیری فریمورک Laravel پرداخته می‌شود.',
            'آموزش JavaScript' => 'آموزش مبانی JavaScript و کاربردهای آن در وب.',
            'آموزش طراحی وب' => 'دوره‌ای جامع برای طراحی وب سایت از صفر تا صد.',
            'آموزش داده‌کاوی' => 'مفاهیم و تکنیک‌های داده‌کاوی را یاد بگیرید.',
        ];

        $title = array_rand($courses);

        return [
            'title' => $title,
            'description' => $courses[$title],
            'user_id' => User::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
