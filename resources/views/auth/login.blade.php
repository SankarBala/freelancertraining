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
                <h3>Sign in</h3>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row">
                        @error('email') <span class="pl-3 py-1 text-warning">{{ $message }}</span> @enderror
                        <div class="col-xl-12 col-md-12">
                            <input type="email" name="email" placeholder="Enter your email address">
                        </div>

                        @error('password') <span class="pl-3 py-1 text-warning">{{ $message }}</span> @enderror
                        <div class="col-xl-12 col-md-12">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="btn btn-warning">Sign in</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc"
                        href="{{ route('register') }}">Register</a>
                </p>
            </div>
        </div>
    </div>
    <!-- form itself end -->

@endsection
