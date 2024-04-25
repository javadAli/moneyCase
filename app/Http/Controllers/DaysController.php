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
                            , "SnBookMonth"=>$request->SnBookMonth
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


    public function update(Request $request,Days $workDay)
    {
        $day=$workDay->update([  
                    "dayName"=>"$request->dayName"
                    , "InAmount"=>$request->InAmount
                    , "OutAmount"=>$request->OutAmount
                    , "SnBookMonth"=>$request->SnBookMonth
                    ]);
        return response()->json(['day'=>$day]);
    }


    public function destroy(Days $workDay)
    {
        $day=$workDay->delete();
        return response()->json(["day"=>$day]);
    }
}
