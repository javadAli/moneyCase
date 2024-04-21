<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{

    public function index()
    {
        return Work::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $workname=$request->workName;
        $description=$request->description;
        $userSn=$request->userSn;
        $startDate=now();
        $endDate=now();
        $work=Work::create(["workName"=>"$workname",
                    "description"=>"$description",
                    "userSn"=>$userSn,
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
        $userSn=$request->userSn;
        $startDate=now();
        $endDate=now();
        $description=$request->description;
        $userSn=$request->userSn;
        $startDate=now();
        $endDate=now();
        $work=Work::where("workId",$work->workId)->update(["workName"=>"$workname",
                    "description"=>"$description",
                    "userSn"=>$userSn,
                    "startDate"=>$startDate,
                    "endDate"=>$endDate]);
        return response()->json(["work"=>$work]);
    }


    public function destroy(Work $work)
    {
        //
    }
}
