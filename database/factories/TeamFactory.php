<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    /**$table->id();
            $table->string('name');
            $table->string('owner');
            $table->string('stadium');
            $table->integer('level');
            $table->timestamps();
            */
    public function definition(): array
    {
        return [
            //
            'id' => $this->faker->unique()->numberBetween(100000, 999999),
            'name' => $this->faker->word,
            'owner' => $this->faker->name(),
            'stadium' => $this->faker->streetAddress(),
            'level' => $this->faker->numberBetween(1,100)
        ];
    }
}
