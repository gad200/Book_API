<?php
namespace App\Services;

use App\Repositories\BookRepositoryInterface;

class BookService
{
    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAllBooks()
    {
        return $this->bookRepository->getAllBooks();
    }

    public function getBookById(string $id)
    {
        return $this->bookRepository->getBookById($id);
    }

    public function createBook(array $data)
    {
        return $this->bookRepository->createBook($data);
    }

    public function updateBook(string $id, array $data)
    {
        return $this->bookRepository->updateBook($id, $data);
    }

    public function deleteBook(string $id)
    {
        return $this->bookRepository->deleteBook($id);
    }
}