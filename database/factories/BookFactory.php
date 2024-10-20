<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;

class BookFactory extends Factory
{
    // Specify the associated model
    protected $model = Book::class;

    public function definition()
    {
        return [
            'id' => (string) Str::ulid(), // Generate ULID for id
            'title' => $this->faker->sentence, // Generate a random title
            'author_name' => $this->faker->name, // Generate a random author name
            'publishing_date' => $this->faker->date(), // Generate a random publishing date
        ];
    }
}