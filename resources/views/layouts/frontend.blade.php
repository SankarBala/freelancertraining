<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> --}}

    {{-- @stack('style') --}}

    <style>
        .bg-purple {
            background: purple;
        }

        .bg-indigo {
            background: #a44ded;
        }

    </style>

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2 col-12">
                            <div class="logo-img">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('img/logo.png') }}" alt="Freelancer Training">
                                </a>
                            </div>
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{ activeMenu('/') }}" href="{{ route('home') }}">home</a>
                                        </li>
                                        <li><a class="{{ activeMenu('courses') }}"
                                                href="{{ route('courses') }}">Courses</a></li>
                                        {{-- <li><a href="">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="">course details</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a class="{{ activeMenu('about') }}"
                                                href="{{ route('about') }}">About</a></li>
                                        <li><a class="{{ activeMenu('contact') }}"
                                                href="{{ route('contact') }}">Contact</a></li>
                                        @guest
                                            <a href="{{ route('register') }}" class="text-white text-center border p-2 rounded">
                                                Register
                                            </a>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-lg-block">
                            <div class="log_chat_area d-flex align-items-center justify-content-between">
                                <div>
                                    @auth
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-info login"><i
                                                    class="fa fa-user"></i>Logout</button>
                                        </form>
                                    @endauth
                                    @guest
                                        <a href="{{ route('login') }}" class="login btn btn-success">
                                            <i class="fa fa-user"></i>Login
                                        </a>
                                    @endguest
                                </div>
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange  bg-info" href="#">
                                        <i class="fa fa-phone-square"></i>
                                        <span>{{ env('APP_PHONE') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('content')


    <!-- subscribe_newsletter_Start -->
    <div class="subscribe_newsletter pt-5 bg-indigo">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Subscribe to our newsletter</h3>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <form id="newsletter" action="#" method="post" class="newsletter_form" />
                        <input id="subscription_email" type="email" name="email" placeholder="Enter your mail" />
                        <button id="subscribe" type="submit">Subscribe</button>
                        <span id="newsletter_response" class="text-warning mt-2"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                {{-- বাংলাদেশের আমরাই একমাত্র যারা ছাত্রছাত্রীদের অর্জিত টাকা দিয়ে প্রশিক্ষন ফি পরিশোধ করার সুযোগ দিয়ে থাকি।
                                আমাদের প্রতিটি ছাত্রছাত্রীর প্রতি বিশেষ যত্ন নিয়ে প্রশিক্ষন করা হয়। --}}

                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://web.facebook.com/freelancertraining.xyz">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="/">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="/">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Courses
                            </h3>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">UX/UI Design</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Basic Office Applications</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Resources
                            </h3>
                            <ul>
                                <li><a href="#">Software</a></li>
                                <li><a href="#">License</a></li>
                                <li><a href="#">Certificate</a></li>
                                <li><a href="#">Templates</a></li>
                                <li><a href="#">UI Layouts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <p>
                                121/A, B-block, Bijoy Sorony <br>
                                {{ env('APP_PHONE') }} <br>
                                {{ env('APP_EMAIL') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | Freelancer Training
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- JS here -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        let subscribe = document.querySelector('#subscribe');
        let newsletter_response = document.querySelector('#newsletter_response');
        subscribe.onclick = function(e) {
            let subscription_email = document.querySelector('#subscription_email').value;
            e.preventDefault();
            $.ajax({
                url: "{{ route('subscribe') }}",
                type: "POST",
                data: JSON.stringify({
                    email: subscription_email,
                    _token: "{{ csrf_token() }}"
                }),
                contentType: "application/json",
                accept: "application/json",
                success: function(data, status) {
                    newsletter_response.innerHTML = data;
                },
                error: function(data) {
                    newsletter_response.innerHTML = data.responseJSON.errors.email;
                }
            });
        }

    </script>

</body>

</html>
