<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
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
        $workerName=$request->workerName;
        $description=$request->description;
        $workId=$request->work_workId;
        $addedTime=now();
        $worker=Worker::create([
            "workerName"=>"$workerName"
            , "description"=>"$description"
            , "work_workId"=>$workId
            ,"TimeStamp"=>$addedTime
        ]);
        return response()->json(['worker'=>$worker]);

    }


    public function show(Worker $worker)
    {

    }


    public function edit(Worker $worker)
    {
        //
    }


    public function update(Request $request, Worker $worker)
    {
        $workerName=$request->workerName;
        $description=$request->description;
        $workId=$request->work_workId;
        $addedTime=now();
        $worker=$worker->update([
            "workerName"=>"$workerName"
            , "description"=>"$description"
            , "work_workId"=>$workId
        ]);
        return response()->json(['worker'=>$worker]);
    }


    public function destroy(Worker $worker)
    {
        $worker=$worker->delete();
        return response()->json(["worker"=>$worker]);
    }
    public function getMonthDays(Request $request,Worker $worker) {
        $monthDays=$worker->monthDays;
        return response()->json(['monthDays'=>$monthDays]);
    }
}
