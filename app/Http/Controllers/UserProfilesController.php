<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\UserProfile;

class UserProfilesController extends Controller
{

    public function index()
        {
            $tasks = UserProfile::all();

            return response()->json($tasks);
        }
    public function store(Request $request){
        print_r($request->input());

        $item = new UserProfile;
        $item->username = $request->input('username');
        $item->profileimage = $request->input('profileimage');
        $item->description = $request->input('description');
        $item->save();
    }
}
