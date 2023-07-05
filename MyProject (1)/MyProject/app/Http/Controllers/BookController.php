<?php

namespace App\Http\Controllers;

use App\Models\Book; // Импорт на модела за книга
use Illuminate\Http\Request;

class BookController extends Controller
{


    public function showAdd() {
        return view('add');
    }

    public function addBook(Request $request) {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'price'=>'required',
        ]);

        Book::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'price'=>$request->price,
        ]);
        return view('add')->with('message', 'Книгате е добавена успешно!');
}


    public function showBook() {

        $books = Book::all(); // Извличане на всички редове от таблицата "book" чрез модела

        return view('book', ['books' => $books]);
    }

    public function deleteBook($id) {

        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->back()->with('message', 'Книгата е изтрита успешно!');
    }

    public function editBook($id)
    {
        $book = Book::findOrFail($id);

        return view('edit-book', ['book' => $book]);
    }

    public function updateBook(Request $request, $id)
    {
        $books = Book::all();
        $book = Book::findOrFail($id);

        $book->update([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'price' => $request->input('price')
        ]);



        return view('book',['books' => $books, 'book' => $book])->with('message', 'Книгата е актуализирана успешно!');
    }

    public function searchByName(Request $request)
{
    $title = $request->input('title');
    $books = Book::where('title', 'LIKE', "%$title%")->get();

    return view('book', ['books' => $books]);
}

// public function __construct()
// {
//     $this->middleware('auth');
// }
}

