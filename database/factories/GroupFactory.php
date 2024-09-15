<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Group::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'teacher_id' => User::factory(),
            // 'institute_id' => Institute::factory(),
        ];
    }
}
