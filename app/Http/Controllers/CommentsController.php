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
            "SnDay"=>$request->SnDay]);
        return response()->json(['comment'=>$comments]);
    }


    public function show(Comments $comments)
    {
        //
    }


    public function edit(Comments $comments)
    {
        //
    }


    public function update(Request $request, Comments $comments)
    {
        //
    }


    public function destroy(Comments $comments)
    {
        //
    }
}
