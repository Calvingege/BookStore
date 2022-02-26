<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function createBook(){
    return view('createBook');
    
}

    public function storeBook(Request $request){
        $request->validate([
            'bookTitle' => 'required|min:5|max:20', 
            'releaseDate' => 'required|numeric|min:2000|max:2021',
            'author' => 'required|min:5|max:20',
            'totalPages' => 'required|numeric|min:1'
        ]);
        // masukan ke database
        Book::create([
            'bookTitle' => $request->bookTitle, // judul buku 
            'releaseDate' => $request->releaseDate, // tahun terbit 
            'author' => $request->author, // penulis buku 
            'totalPages' => $request->totalPages // jumlah halaman
        ]);

        // masukan ke databse
        // books::create($request->all());

        // redirect ke show/books
        return redirect('/show/books'); 
    }

    public function showBook(){ // redirect ke store books 
        $books = Book::all(); // buat ambil semua data dari model
        return view('showBooks', compact('books')); // compact buat ngasih variable yang nama nya sama dengan yang di compact itu. 

    }

    public function formUpdateBook($id){
        $books = Book::findOrFail($id);
        return view('updateBook', compact('books'));
    }

    public function updateBook($id, Request $request){
        Book::findOrFail($id)->update([
            'bookTitle' => $request->bookTitle,
            'releasedDate' => $request->releasedDate,
            'author' => $request->author,
            'totalPages' => $request->totalPages
        ]);
        return redirect('/show/books');
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect('/show/books');
    }
}
