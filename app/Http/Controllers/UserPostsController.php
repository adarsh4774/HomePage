<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPost;
use App\User;

class UserPostsController extends Controller
{
    public function index(User $user)
        {
            $tasks = UserPost::find($user);

            return response()->json($tasks);
        }
    public function store(Request $request){
        print_r($request->input());

        $item = new UserPost;
        $item->username = $request->input('username');
        $item->posturl = $request->input('posturl');
        $item->postdatetime = $request->input('postdatetime');
        $item->save();
    }
}
