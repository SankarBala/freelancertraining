@extends('admin.layouts.backend')

@section('title', 'Courses')

@section('content')
    <table class="table table-bordered">
        <caption>
        </caption>
        <thead>
            <tr>
                <th>Course ID</th>
                <th>Course Category</th>
                <th>Course Title</th>
                <th>Course Price</th>
                <th>Course Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->category }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->rating }}</td>
                    <td>
                        <table>
                            <tr>
                                <td> <a href="{{ route('admin.courseEdit', $course->id) }}"
                                        class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form method="post" action="{{ route('admin.courseDelete', $course->id) }}" >
                                        @csrf
                                        <input type="submit" value="Delete" class="btn btn-danger" />
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
