<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Session;

class ProfileController extends Controller
{
    
function add(Request $request){
$id = Session::get('id');



    $post = new Post([
        'url' => $request->get('url'),
        'description' => $request->get('desc'),
        'user_posted' => $id,
        'like_count' => 0,
    ]);
    $post->save();
       return redirect("browse");


 }

    function login(Request $request){
        $user = Profile::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('id', $user->id);
                return redirect("browse")->with('user', $user->id);

            }else{
                return back()->with('fail', 'Incorrect Password');
            }


        }else{
            return back()->with('fail', 'This email does not exist');

        }


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
        $user->password = Hash::make($request->input("password"));

       $result =  $user->save();
       if($result){
        return redirect("browse");
    }else{
        return back()->with('fail', 'Could not register user :(');
    }
    }
}
