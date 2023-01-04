<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function store()
    {
  //      $data = request()->validate([
  //        'title' => 'required',
  //        'author' => 'required'
  //      ]);

        Book::create($this->validateRequest());
    }

    public function update(Book $book)
    {

      $book->update($this->validateRequest());

      return redirect($book->path());
    }

    protected function validateRequest()
    {
      return request()->validate([
        'title'  => 'required',
        'author' => 'required',
      ]);
    }

    public function destroy(Book $book)
    {
      $book->delete();

      return redirect('/books');
    }
}
