<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $book=Book::create(["bookName"=>"$request->bookName"
                        , "description"=>"$request->description"
                        , "SnUSer"=>$request->SnUSer]);
        return response()->json(['book'=>$book]);
    }


    public function show(Book $book)
    {
        //
    }


    public function edit(Book $book)
    {
        //
    }


    public function update(Request $request, Book $book)
    {

        $book=$book->update(["bookName"=>"$request->bookName"
                            , "description"=>"$request->description"
                            , "SnUSer"=>$request->SnUSer]);
        return response()->json(['book'=>$book]);
    }

    public function destroy(Book $book)
    {
        $book=$book->delete();
        return response()->json(["book"=>$book]);
    }
}
