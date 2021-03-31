@extends('backend.layouts.backend')

@section('title', 'Profile')

@section('content')

    <div class="">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-8">
                            <h4>{{ $user->name }}</h4>
                            <small><cite title="San Francisco, USA"></cite></small>
                            <p>
                                <i class="glyphicon glyphicon-envelope"></i> {{ $user->email }}
                            </p>
                            <p>
                                <i class="glyphicon glyphicon-phone"></i> {{ $user->phone }}
                            </p>
                            @foreach ($user->membership as $member)
                                <span class="btn btn-primary">{{ $member->member_type }} member</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <a href="{{ route('dashboard.profileEdit') }}" class="btn btn-warning">Edit Profile</a> --}}
    </div>


@endsection
