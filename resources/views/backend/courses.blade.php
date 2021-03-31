@extends('backend.layouts.backend')

@section('title', 'Courses')

@section('content')

    <table class="table table-bordered">
        <caption>
            <h2>
                @if ($user->course->count() > 0)
                    The courses you have enrolled
                @else
                    You have not any course enrolled
                @endif
                <a href="{{ route('enrollment.index') }}" class="btn btn-primary">Enrole a course</a>
            </h2>
        </caption>
        <thead>
            @if ($user->course->count() > 0)
                <tr>
                    <th>Course Name</th>
                    <th>Class Time</th>
                    <th>Language</th>
                    <th>Class Start</th>
                    <th>Actions</th>
                </tr>
            @endif
        </thead>
        <tbody>
            @foreach ($user->course as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>
                        {{ ucwords(str_replace(',', ', ', preg_replace('/([[\]\"])/i', '', $course->pivot->time))) }}
                    </td>
                    <td>
                        {{ ucwords(str_replace(',', ', ', preg_replace('/([[\]\"])/i', '', $course->pivot->language))) }}
                    </td>
                    <td>Comming soon</td>
                    <td>
                        <table>
                            <tr>
                                {{-- <td> <a href="{{ route('enrollment.edit', $course->id) }}"
                                        class="btn btn-warning">Edit</a></td> --}}
                                <td>
                                    <form method="POST" action="{{ route('enrollment.destroy', $course->id) }}">
                                        {{ method_field('DELETE') }}
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
