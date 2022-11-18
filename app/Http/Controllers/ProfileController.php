<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    

    function login(){

    }

    function register(Request $request){

        $request->validate([
            'email' => 'required|email|unique:profiles'
        ]);
     
        $user = new Profile;
        $user->fname = $request->input("fname");
        $user->lname = $request->input("lname");
        $user->gender = $request->input("gender");
        $user->birthdate = $request->input("birthdate");
        $user->number = $request->input("phonenumber");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("lname"));

       $result =  $user->save();
       if($result){
        return redirect("browse");
    }else{
        return back()->with('fail', 'Could not register user :(');
    }
    }
}
