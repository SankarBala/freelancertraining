@extends('layouts.auth')

@section('content')


    <!-- form itself end-->
    <div id="test-form" class="">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="freelancer training">
                    </a>
                </div>
                <h3>Enroll a course for free</h3>
                <form action="{{ route('enrollment.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <span class="text-left">
                                <h4 class="text-white">Select a course</h4>
                            </span>
                            @error('name') <span class="pl-3 py-1 text-warning">{{ $message }}</span> @enderror
                            <select name="course_id" class="form-control">
                                <option value="">Select A Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <br />
                            <span class="text-left">
                                <h4 class="text-white">Select class time you prefer</h4>
                            </span>
                            <div class="d-flex justify-content-between position-relative">
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="time[]"
                                        value="morning" />
                                    <span class="ml-2 mt-3 position-absolute text-warning">Morning </span>
                                </label>
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="time[]"
                                        value="evening" />
                                    <span class="ml-2 mt-3 position-absolute text-warning">Evening </span>
                                </label>
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="time[]"
                                        value="night" />
                                    <span class="ml-2 mt-3 position-absolute text-warning">Night </span>
                                </label>
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="time[]" value="anytime"
                                        checked />
                                    <span class="ml-2 mt-3 position-absolute text-warning">Anytime
                                    </span>
                                </label>
                                <label class="hidden"></label>
                            </div>
                        </div>


                        <div class="col-xl-12 col-md-12">

                            <span class="text-left">
                                <h4 class="text-white">Select class language you want</h4>
                            </span>
                            <div class="d-flex justify-content-between position-relative">
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="language[]"
                                        value="bangla" />
                                    <span class="ml-2 mt-3 position-absolute text-light">Bangla </span>
                                </label>
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="language[]"
                                        value="english" checked />
                                    <span class="ml-2 mt-3 position-absolute text-light">English </span>
                                </label>
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="language[]"
                                        value="hindi" />
                                    <span class="ml-2 mt-3 position-absolute text-light">Hindi </span>
                                </label>
                                <label class="">
                                    <input class="d-inline" style="width:20px" type="checkbox" name="language[]"
                                        value="all" />
                                    <span class="ml-2 mt-3 position-absolute text-light">Any
                                    </span>
                                </label>
                                <label class="hidden"></label>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <h4 class="text-center text-success">{{ session('message') }}</h4><br />
                            <button type="submit" class="btn btn-success">Enroll</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- form itself end -->

@endsection
