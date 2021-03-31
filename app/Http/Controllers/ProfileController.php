<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $user = Auth::user();
        return view('backend.profile')->withUser($user);
    }

    public function edit(){
        $user = Auth::user();
        return view('backend.profileEdit')->withUser($user);
    }
}
