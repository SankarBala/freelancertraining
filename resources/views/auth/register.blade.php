@extends('layouts.auth')

@section('content')

    <!-- form itself end-->
    <div id="test-form" class="">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="{{ route('home') }}">
                        <img src="img/logo.png" alt="freelancer training">
                    </a>
                </div>
                <h3>Register</h3>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="row">
                        @error('name') <span class="pl-3 py-1 text-warning">{{ $message }}</span> @enderror
                        <div class="col-xl-12 col-md-12">
                            <input name="name" type="text" placeholder="Enter your name">
                        </div>
                        @error('email') <span class="pl-3 py-1 text-warning">{{ $message }}</span> @enderror
                        <div class="col-xl-12 col-md-12">
                            <input name="email" type="email" placeholder="Enter your email address">
                        </div>
                        @error('phone') <span class="pl-3 py-1 text-warning">{{ $message }}</span> @enderror
                        <div class="col-xl-12 col-md-12">
                            <input name="phone" type="text" placeholder="Enter your phone number">
                        </div>
                        @error('password') <span class="pl-3 py-1 text-warning">{{ $message }}</span> @enderror
                        <div class="col-xl-12 col-md-12">
                            <input name="password" type="password" placeholder="Type a password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="{{ route('login') }}">Log
                        In</a>
                </p>
            </div>
        </div>
    </div>
    <!-- form itself end -->

@endsection
