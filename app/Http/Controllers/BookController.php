<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();

        $data = [
            'book' => $book
        ];
        return view('book.index', $data);
    }

    public function create()
    {
        return view('book.tambah');
    }

    public function save(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'published_date' => $request->published_date,
            'publisher' => $request->publisher,
            'stock' => $request->stock,
            $request->except(['_token']),
        ]);
        return redirect('book')->with('success', 'Book List Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.edit', compact(['book']));
    }

    public function update($id, Request $request)
    {
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'published_date' => $request->published_date,
            'publisher' => $request->publisher,
            'stock' => $request->stock,
            $request->except(['_token']),
        ]);
        return redirect('book'); //ini
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('book'); //
    }
}
