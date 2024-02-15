<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> fake() -> sentence(3),
            'publication_year'=> fake() -> date(),
            'pages'=> fake() -> numberBetween(10, 500),
            'price'=> fake() -> randomFloat(2, 1, 100),
            'ratings'=> fake() -> randomFloat(1, 0, 10),
        ];
    }
}
