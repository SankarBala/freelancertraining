<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $user = Auth::user();
        return view('backend.settings')->withUser($user);
    }
}
  