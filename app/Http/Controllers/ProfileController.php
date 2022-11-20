<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Post;
use App\Models\User_has_like;
use App\Models\User_has_comment;
use App\Models\User_hide;
use Illuminate\Support\Facades\Hash;
use Session;

class ProfileController extends Controller
{


    function like($post_id){
        $id = Session::get('id');
        $like = new User_has_like([
            'user_id' => $id,
            'post_id' => $post_id,
        ]);
        $like->save();
        $post = Post::find($post_id);
        $post->like_count = $post->like_count +1; 
        $post ->save();
        return redirect("browse");

    }

    function comment(Request $request, $post_id){
        $id = Session::get('id');
        $input = $request->all();
        $comm = new User_has_comment([
            'user_id' => $id,
            'post_id' => $post_id,
            'comment' => $input['comment'],
        ]);
        $comm->save();
        return redirect("browse");

    }

    function hide_from(Request $request, $post_id){
        $id = Session::get('id');
        $input = $request->all();
        $email = $input['email'];
        $profile = Profile::where("email", $email)->first();
        $user_id = $profile->id;
        $hidden = new User_hide([
            'user_id' => $id,
            'post_id' => $post_id,
            'user_id_hidden' => $user_id,
        ]);
        $hidden->save();
        return redirect("browse");
    }

    function hide($id){
        $post = Post::find($id);
        return view('hide', compact('post'));
    }

    function edit($id){
        $profile = Profile::find($id);
        return view('edit-profile', compact('profile'));
    }

    function delete($id){
        $post = Post::find($id)->delete();
        return view('browse');
    }

    function update(Request $request, $id){
        $input = $request->all();
        $profile = Profile::find($id);
        $profile->fname = $input['fname'];
        $profile->lname = $input['lname'];
        $profile->birthdate = $input['birthdate'];
        $profile->number = $input['number'];
        $profile->gender = $input['gender'];
        $profile->save();
        return redirect("browse");

    }
    
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
       $request->session()->put('id', $user->id);
       if($result){
        return redirect("browse");
    }else{
        return back()->with('fail', 'Could not register user :(');
    }
    }
}
