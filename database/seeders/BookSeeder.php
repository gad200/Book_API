<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Create 10 dummy books using the BookFactory
        Book::factory(10)->create();
    }
}