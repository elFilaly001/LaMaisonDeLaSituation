<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Contracts\Validation\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view("book", compact("books"));
    }

    public function store(Request $request)
    {
        $inp = $request->all();
        Book::create($inp);
        return redirect("/");
    }
}
