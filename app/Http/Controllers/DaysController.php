<?php

namespace App\Http\Controllers;

use App\Models\Days;
use Illuminate\Http\Request;

class DaysController extends Controller
{

    public function index()
    {
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $day=Days::create([  
                            "dayName"=>"$request->dayName"
                            , "InAmount"=>$request->InAmount
                            , "OutAmount"=>$request->OutAmount
                            , "bookmonths_bookMonthSn"=>$request->bookmonths_bookMonthSn
                            ]);
        return response()->json(['day'=>$day]);
    }


    public function show(Days $days)
    {
        return response()->json(['day'=>$days]);
    }


    public function edit(Days $days)
    {
        return response()->json(['day'=>$days]);
    }


    public function update(Request $request,Days $bookDay)
    {
        $day=$bookDay->update([  
                    "dayName"=>"$request->dayName"
                    , "InAmount"=>$request->InAmount
                    , "OutAmount"=>$request->OutAmount
                    , "bookmonths_bookMonthSn"=>$request->bookmonths_bookMonthSn
                    ]);
        return response()->json(['day'=>$day]);
    }


    public function destroy(Days $bookDay)
    {
        $day=$bookDay->delete();
        return response()->json(["monthDay"=>$day]);
    }
    public function getComments(Request $request,Days $bookDay){
        $comments=$bookDay->comments;
        return response()->json(['comments'=>$comments]);
    }
}
