@extends('admin.layouts.backend')

@section('title', 'Users')

@section('content')

    <table class="table table-bordered">
        <caption>
        </caption>
        <thead>
            <tr>
                <th>Users ID</th>
                <th>Users Name</th>
                <th>Users Email</th>
                <th>Users Phone</th>
                <th>Users Courses</th>
                <th>Users Membership</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        @foreach ($user->course as $course)
                            <span class="btn btn-primary">{{ $course->title }}</span>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($user->membership as $member)
                            <span class="btn btn-primary">{{ $member->member_type }}</span>
                        @endforeach
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td> <a href="" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form method="post" action="">
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
