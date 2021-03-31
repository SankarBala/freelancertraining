<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer Training Dashboard</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/timeline.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/startmin.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/morris.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Top Navigation: Left Menu -->
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a target="_blank" href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
                @if (Auth::id() === 1)
                    <li><a target="_blank" href="{{ route('admin') }}"><i class="fa fa-users fa-fw"></i>Super
                            Admin</a></li>
                @endif
            </ul>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    No notification
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{ $user->name }}
                    </a>
                </li>
                @auth
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                            {{ csrf_field() }}
                            <button type="submit" class="bg-dark"><i class="fa fa-sign-out fa-fw"></i>Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>

            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <br />
                        {{-- <li>
                            <a href="{{ route('dashboard') }}" class="active"><i class="fa fa-dashboard fa-fw"></i>
                                Dashboard</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('dashboard.course') }}" class=""><i class="fa fa-book fa-fw"></i>
                                Courses</a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.profile') }}" class=""><i class="fa fa-user fa-fw"></i>
                                Profile</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('dashboard.setting') }}" class=""><i class="fa fa-gear fa-fw"></i>
                                Settings</a>
                        </li> --}}

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('title')</h1>
                    </div>
                </div>

                @yield('content')

            </div>
        </div>

    </div>

    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/js/startmin.js') }}"></script>

</body>

</html>
