<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::where('status', 0)->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year_published' => $request->year_published, 
            'status' => 0
        ]);

        return redirect('/books');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year_published' => $request->year_published 
        ]);

        return redirect('/books');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if($book) {
            $book->status = 1;
            $book->save();
        }

        return redirect('/books');
    }
}