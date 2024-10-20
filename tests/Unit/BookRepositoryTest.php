<?php

// tests/Unit/BookRepositoryTest.php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_book()
    {
        $repo = new BookRepository();
        $data = ['title' => 'Kamael', 'author_name' => 'Author', 'publishing_date' => '2023-01-01'];
        $book = $repo->createBook($data);

        $this->assertDatabaseHas('books', $data);
    }

    // Add more tests for update, delete, etc.
}
