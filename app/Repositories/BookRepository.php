<?php
namespace App\Repositories;

use App\Models\Book;

class BookRepository implements BookRepositoryInterface
{
    public function getAllBooks()
    {
        return Book::all();
    }

    public function getBookById(string $id)
    {
        return Book::findOrFail($id);
    }

    public function createBook(array $data)
    {
        return Book::create($data);
    }

    public function updateBook(string $id, array $data)
    {
        $book = Book::findOrFail($id);
        $book->update($data);
        return $book;
    }

    public function deleteBook(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return $book;
    }
}
