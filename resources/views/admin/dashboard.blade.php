@extends('admin.layouts.backend')

@section('title', 'Dashboard')

@section('content')

    <h3>Subscriptions</h3>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        @foreach ($subscriptions as $subscription)
            <tr>
                <td>{{ $subscription->id }}</td>
                <td>{{ $subscription->email }}</td>
                <td>{{ $subscription->status }}</td>
            </tr>
        @endforeach
    </table>

    <h3>QueryMessages</h3>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
        </tr>

        @foreach ($queries as $query)
            <tr>
                <td>{{ $query->id }}</td>
                <td>{{ $query->name }}</td>
                <td>{{ $query->email }}</td>
                <td>{{ $query->subject }}</td>
                <td>{{ $query->message }}</td>
                <td>{{ $query->status }}</td>
            </tr>
        @endforeach
    </table>

@endsection
