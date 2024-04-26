<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
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
        $workname=$request->workName;
        $description=$request->description;
        $user_id=$request->user_id;
        $startDate=now();
        $endDate=now();
        $work=Work::create(["workName"=>"$workname",
                    "description"=>"$description",
                    "user_id"=>$user_id,
                    "startDate"=>now(),
                    "endDate"=>now()]);
        return response()->json(["work"=>$work]);
    }

    public function show(Work $work)
    {
        //
    }


    public function edit(Work $work)
    {
        //
    }


    public function update(Request $request, Work $work)
    {
        $workname=$request->workName;
        $description=$request->description;
        $user_id=$request->user_id;
        $startDate=now();
        $endDate=now();
        $description=$request->description;
        $user_id=$request->user_id;
        $startDate=now();
        $endDate=now();
        $work=$work->update(["workName"=>"$workname",
                    "description"=>"$description",
                    "user_id"=>$user_id,
                    "startDate"=>$startDate,
                    "endDate"=>$endDate]);
        return response()->json(["work"=>$work]);
    }


    public function destroy(Work $work)
    {
        $work=$work->delete();
        return response()->json(["work"=>$work]);
    }

    public function getWorkers(Request $request,Work $work){
        $workers=$work->workers();
        return response()->json(['workers'=>$workers]);
    }
}
