<?php

namespace Database\Factories;

use App\Models\Association;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssociationFactory extends Factory
{
    protected $model = Association::class;

    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numberBetween(100000, 999999),
            'name' => $this->faker->word,
        ];
    }
}
