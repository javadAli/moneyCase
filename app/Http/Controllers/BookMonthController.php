<?php

namespace App\Http\Controllers;

use App\Models\BookMonth;
use Illuminate\Http\Request;

class BookMonthController extends Controller
{

    public function index()
    {
        return  BookMonth::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
       $bookMonth= BookMonth::create([  
                            "books_bookSn"=>$request->books_bookSn
                            , 
                            "NameMonth"=>"$request->NameMonth"
    ]);
    return response()->json(['bookMonth'=>$bookMonth]);
    }


    public function show(BookMonth $bookMonth)
    {
        //
    }


    public function edit(BookMonth $bookMonth)
    {
        //
    }


    public function update(Request $request, BookMonth $bookMonth)
    {
        $bookMonth=$bookMonth->update([  
                                        "books_bookSn"=>$request->books_bookSn
                                        , 
                                        "NameMonth"=>"$request->NameMonth"
                                        ]);
            return response()->json(['bookMonth'=>$bookMonth]);
    }


    public function destroy(BookMonth $bookMonth)
    {
        $bookMonth=$bookMonth->delete();
        return response()->json(['bookMonth'=>$bookMonth]);
    }
}
