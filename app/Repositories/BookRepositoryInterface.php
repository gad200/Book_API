<?php
// app/Repositories/BookRepositoryInterface.php
namespace App\Repositories;

use App\Models\Book;

interface BookRepositoryInterface
{
    public function getAllBooks();
    public function getBookById(string $id);
    public function createBook(array $data);
    public function updateBook(string $id, array $data);
    public function deleteBook(string $id);
}
