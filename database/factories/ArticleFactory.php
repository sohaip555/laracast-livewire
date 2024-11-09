<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'title' => $this->faker->realText(50),
            'content' => $this->faker->realText(500),
            'notifications' => $this->faker->randomElement([['email', 'sms', 'push'], ['email', 'sms'], ['sms', 'push'], ['email', 'push'], []]),
            'published' => $this->faker->randomElement([true, false]),
        ];
    }
}
