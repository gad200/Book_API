<?php

// app/Http/Controllers/BookController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        return response()->json($this->bookService->getAllBooks());
    }

    public function show($id)
    {
        return response()->json($this->bookService->getBookById($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'author_name' => 'required|string',
            'publishing_date' => 'required|date',
        ]);

        return response()->json($this->bookService->createBook($data), 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'sometimes|string',
            'author_name' => 'sometimes|string',
            'publishing_date' => 'sometimes|date',
        ]);

        return response()->json($this->bookService->updateBook($id, $data));
    }

    public function destroy($id)
    {
        return response()->json($this->bookService->deleteBook($id));
    }
}