<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
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
        $comments=Comments::create([
            "comment"=>"$request->comment",
            "days_daySn"=>$request->days_daySn]);
        return response()->json(['comment'=>$comments]);
    }


    public function show(Comments $comments)
    {
        //
    }


    public function edit(Comments $dayComment)
    {
        return response()->json(['comments'=>$dayComment]);
    }


    public function update(Request $request,Comments $dayComment)
    {
        $comments=$dayComment->update([
                                    "comment"=>"$request->comment",
                                    "days_daySn"=>$request->days_daySn]);
        return response()->json(['comment'=>$comments]);
    }


    public function destroy(Comments $dayComment)
    {
        $comment=$dayComment->delete();
        return response()->json(['comment'=>$comment]);
    }
}
