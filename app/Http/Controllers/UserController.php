<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    public function getWorks(Request $request,User $user) {
        $works=$user->works();
        return response()->json(['works'=>$works]);
    }
}
