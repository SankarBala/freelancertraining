@extends('admin.layouts.backend')

@section('title', 'New course')

@section('content')
    <div class="">
        <form class="form-horizontal" action="{{ route('admin.courseUpdate', $course->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="courseCategory">Course category:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="courseCategory" placeholder="Enter course category"
                        name="courseCategory" value="{{ $course->category }}" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="courseTitle">Course title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="courseTitle" placeholder="Enter course title"
                        name="courseTitle" value="{{ $course->title }}" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="courseDescription">Course Description:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" type="text" class="form-control" id="courseDescription"
                        placeholder="Enter course decription"
                        name="courseDescription"> {{ $course->description }}</textarea>

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="courseTitle">Course price:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="courseTitle" placeholder="Enter course price"
                        name="coursePrice" value="{{ $course->price }}" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="courseRating">Course rating:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="courseRating" placeholder="Enter course rating" min="0"
                        max="5" step="any" name="courseRating" value="{{ $course->rating }}" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="courseImage">Course image:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="courseImage" placeholder="Enter course image" min="0"
                        max="5" step="any" name="courseImage" value="{{ $course->image }}" />
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    </div>



@endsection
