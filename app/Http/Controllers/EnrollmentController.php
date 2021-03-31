<?php

namespace App\Http\Controllers;

use App\Models\enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('enrollment')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'course_id' => ['required', 'integer', 'max:20'],
            'time' => ['required', 'array', 'max:4', 'min:1'],
            'language' => ['required', 'array', 'max:4', 'min:1']
        ]);


        $user = User::find(Auth::id());

        $user->course()->syncWithoutDetaching($request->course_id);
        $user->course()->updateExistingPivot($request->course_id, [
            'time' => json_encode($request->time),
            'language' => json_encode($request->language)
        ]);


        $request->session()->flash('message', 'Enrollment successfully updated');

        // $enrolled = Enrollment::where('course_id', '=', $request->course_id)->where('user_id', '=', Auth::id())->get();

        // if ($enrolled->count() !== 0) {
        //     $request->session()->flash('message', 'Enrollment edited successfully.');
        //     $enrollment = Enrollment::find($enrolled[0]->id);
        // } else {
        //     $enrollment = new Enrollment;
        //     $request->session()->flash('message', 'You have successfully enrolled the course.');
        // }

        // $enrollment->user_id = Auth::id();
        // $enrollment->course_id = $request->course_id;
        // $enrollment->time = json_encode($request->time);
        // $enrollment->language = json_encode($request->language);

        // $enrollment->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return 'e';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find(Auth::id());
        $user->course()->detach($id);

        return redirect()->route('dashboard.course');
    }
}
