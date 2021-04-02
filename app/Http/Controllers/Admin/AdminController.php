<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Enrollment;
use App\Models\Membership;
use App\Models\QueryMessage;
use App\Models\Subscription;




class AdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $user = Auth::user();
        $enrollments = Enrollment::all();
        $memberships = Membership::all();
        $subscriptions = Subscription::all();
        $queries = QueryMessage::all();

        return view('admin.dashboard')->withUser($user)
            ->withEnrollments($enrollments)
            ->withMemberships($memberships)
            ->withSubscriptions($subscriptions)
            ->withQueries($queries);
    }

    public function courses()
    {
        $user = Auth::user();
        $courses = Course::all();
        return view('admin.courses')->withUser($user)->withCourses($courses);
    }
    public function courseAdd()
    {
        $user = Auth::user();
        return view('admin.addCourse')->withUser($user);
    }
    public function courseSave(Request $request)
    {

        $request->validate([
            'courseTitle' => ['required', 'string', 'max:50'],
        ]);


        $course = new Course();
        $course->category = $request->courseCategory;
        $course->title = $request->courseTitle;
        $course->slug = Str::slug($request->courseTitle);
        $course->description = $request->courseDescription;
        $course->price = $request->coursePrice;
        $course->rating = $request->courseRating;
        $course->image = $request->courseImage;

        $course->save();

        return redirect()->route('admin.courseAdd');
    }

    public function courseEdit($id)
    {
        $user = Auth::user();
        $course = Course::find($id);
        return view('admin.editCourse')->withUser($user)->withCourse($course);
    }

    public function courseUpdate(Request $request, $id)
    {

        $course = Course::find($id);

        $course->category = $request->courseCategory;
        $course->title = $request->courseTitle;
        $course->slug = Str::slug($request->courseTitle);
        $course->description = $request->courseDescription;
        $course->price = $request->coursePrice;
        $course->rating = $request->courseRating;
        $course->image = $request->courseImage;

        $course->save();

        return redirect()->route('admin.courseEdit', $id);
    }

    public function courseDelete($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('admin.courses');
    }

    public function users()
    {
        $users = User::with('course')->with('membership')->get();
        return view('admin.users')->withUsers($users);
    }
}
