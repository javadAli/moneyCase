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
                            "SnBook"=>$request->SnBook
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
        $bookMonth= BookMonth::where("BookMonthSn",$bookMonth->BookMonthSn)->update([  
                                        "SnBook"=>$request->SnBook
                                        , 
                                        "NameMonth"=>"$request->NameMonth"
                                        ]);
            return response()->json(['bookMonth'=>$bookMonth]);
    }


    public function destroy($bookMonthSn)
    {
        $bookMonth=BookMonth::where("BookMonthSn",$bookMonthSn)->delete();
        return response()->json(['bookMonth'=>$bookMonth]);
    }
}
