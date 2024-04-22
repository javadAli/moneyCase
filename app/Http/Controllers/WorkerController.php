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
        $workId=$request->workSn;
        $addedTime=now();
        $worker=Worker::create([
            "workerName"=>"$workerName"
            , "description"=>"$description"
            , "workSn"=>$workId
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
        $workId=$request->workSn;
        $addedTime=now();
        $worker=Worker::where("WorkerId",$worker->WorkerId)->update([
            "workerName"=>"$workerName"
            , "description"=>"$description"
            , "workSn"=>$workId
        ]);
        return response()->json(['worker'=>$worker]);
    }


    public function destroy(Worker $worker)
    {
        $worker=Worker::where("WorkerId",$worker->WorkerId)->delete();
        return response()->json(["worker"=>$worker]);
    }
}
