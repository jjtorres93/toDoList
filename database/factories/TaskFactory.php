<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->randomElement(
                [
                    'new',
                    'assigned',
                    'in_progress',
                    'done',
                    'review',
                ]
            ),
            'assigned' => $this->faker->numberBetween(1, 99),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'created_at' => $this->faker->time(),
        ];
    }
}
