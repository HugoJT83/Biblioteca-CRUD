<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $book_names = config("book_names");
        $rand_bn = array_rand($book_names);

        $author_names = config("author_names");
        $rand_an= array_rand($author_names);

        $genres = config("genres");
        $rand_g = array_rand($genres);

        $synopsis = config("synopsis");
        $rand_s = array_rand($synopsis);

        return [
            'titulo'=> $book_names[$rand_bn],
            'autor' => $author_names[$rand_an],
            'anio' => $this->faker->year(),
            'genero' => $genres[$rand_g],
            'resumen' => $synopsis[$rand_s]
        ];
    }
}
