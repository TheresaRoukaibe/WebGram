<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    function getAllProfiles(){
        $profiles = Profile::all();

        return response()->json([
            "results" => $profiles
 
        ]);

    }

    function registerUser(){
        
    }
}
