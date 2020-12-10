<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{$title}}</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Pondok Programmer" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        @stack('css')
    </head>
    <body>
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
        <header id="topnav">
            <div class="topbar-main bg-white">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.html" class="logo">
                            <img src="{{asset('assets/images/logo-sm.webp')}}" alt="" height="32" class="logo-small">
                            <img src="{{asset('assets/images/logo.webp')}}" alt="" height="20" class="logo-large">
                        </a>
                    </div>
                    <div class="menu-extras topbar-custom"> 
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link text-dark dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('assets/images/users/profile.webp')}}" alt="user" class="rounded-circle">
                                    <span class="ml-2"> Administrator</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Pengaturan Akun</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                            </li>
                            <li class="menu-item list-inline-item">
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="navbar-custom">
                    <div class="container-fluid">
                        <div id="navigation">
                            <ul class="navigation-menu">
                                @include('admin.menu')
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2020 <b>Pondok Programmer</b><span class="d-none d-sm-inline-block"></span>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
        @stack('js')
    </body>
</html>