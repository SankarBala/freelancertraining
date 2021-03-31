<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;

class CourseController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $user = User::with('course')->find(Auth::id());

        return view('backend.courses')->withUser($user);
    }
}
