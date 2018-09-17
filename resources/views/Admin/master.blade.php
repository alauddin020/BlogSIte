<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->

        <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}">

        <!-- App css {{asset('css/bootstrap.css')}}-->
        <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        
    </head>

    <body>
    <div id="wrapper">
        <div class="left-side-menu">
            <div class="slimscroll-menu">

        <!-- LOGO -->
        <a href="{{ route('admin.loginDashboard') }}" class="logo text-center mb-4">
            <span class="logo-lg">
                <img src="{{asset('public/assets/images/logo.png')}}" alt="" height="20">
            </span>
            <span class="logo-sm">
                <img src="{{asset('public/assets/images/logo-sm.png')}}" alt="" height="24">
            </span>
        </a>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">{{Auth::user()->name}}</li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-layers"></i>
                        <span> Post Information </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('addnew.post') }}">
                                <i class="fe-airplay"></i>
                                <span>Add Post</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('showall.post') }}">
                                <i class="fe-monitor"></i>
                                <span>Show All Post</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @if(Auth::user()->type !=0)
                <li>
                    <a href="{{ route('register') }}">
                        <i class="fe-airplay"></i>
                        <span>Add User</span>
                    </a>
                </li>
                @endif
                {{-- <li>
                    <a href="#">
                        <i class="fe-briefcase"></i>
                        <span> UI Elements </span>
                    </a>
                </li>
                <li>
                    <a href="typography">
                        <i class="fe-type"></i>
                        <span> Typography </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-bookmark"></i>
                        <span class="badge badge-secondary float-right">Hot</span>
                        <span> Forms </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="form-elements">General Elements</a>
                        </li>
                        <li>
                            <a href="form-advanced">Advanced Form</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tables-advanced">
                        <i class="fe-grid"></i>
                        <span> Tables </span>
                    </a>
                </li>

                <li class="menu-title">More</li>

                <li>
                    <a href="maps">
                        <i class="fe-map"></i>
                        <span> Maps </span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class="fe-package"></i>
                        <span> Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="pages-calendar">Calendar</a>
                        </li>
                        <li>
                            <a href="pages-timeline">Timeline</a>
                        </li>
                        <li>
                            <a href="pages-invoice">Invoice</a>
                        </li>
                        <li>
                            <a href="pages-contacts">Contacts</a>
                        </li>
                        <li>
                            <a href="pages-login">Login</a>
                        </li>
                        <li>
                            <a href="pages-register">Register</a>
                        </li>
                        <li>
                            <a href="pages-recoverpw">Recover Password</a>
                        </li>
                        <li>
                            <a href="pages-lock-screen">Lock Screen</a>
                        </li>
                        <li>
                            <a href="pages-404">Error 404</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>

            <div class="content-page">
                <div class="content">

                    <!-- TopStart -->
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <style type="text/css">
                            </style>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-bell noti-icon"></i>
                                    <span class="badge badge-danger rounded-circle noti-icon-badge">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="#" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll noti-scroll">

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon">
                                                <img src="{{asset('public/assets/images/users/avatar-2.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="{{asset('public/assets/images/users/avatar-4.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('public/'.Auth::user()->image)}}" alt="user-image" class="rounded-circle">
                                    <small class="pro-user-name ml-1">
                                        {{ Auth::user()->name }}
                                    </small>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">{{ Auth::user()->name }}</h6>
                                    </div>

                                    {{-- <!- item-> --}}
                                    <a href="{{ route('userprofile',['username' => Auth::user()->username]) }}" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('user.profilesetting') }}" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>
                                    
                                    <!-- item-->
                                    <a href="{{ route('lock.screenuser',['lockuser' => Crypt::encryptString('Alauddin') ])}}" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>{{__('Lock Screen')}}</span>
                                    </a>
                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="#" class="dropdown-item notify-item" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        <i class="fe-log-out"></i>
                                        <span>{{ __('Logout') }}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="fe-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                    @yield('content')
            </div>
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                Simulor Admin &copy; <?php echo date('Y'); ?> - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="#">About Us</a>
                                    <a href="#">Help</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>


        </div>
        <!-- END wrapper -->

        @yield('script')
        <!-- App js -->
        <script src="{{asset('public/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('public/assets/js/app.min.js')}}"></script>

        <!-- Plugins js -->
        <script src="{{asset('public/assets/js/custom.js')}}"></script>

        <script src="{{asset('public/assets/js/vendor/Chart.bundle.js')}}"></script>
        <script src="{{asset('public/assets/js/vendor/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('public/assets/js/vendor/jquery.knob.min.js')}}"></script>
            
        {{-- <script src="{{asset('public/assets/js/pages/dashboard.init.js')}}"></script> --}}

        <script src="{{asset('public/assets/js/vendor/switchery.min.js')}}"></script>
        <script src="{{asset('public/assets/js/vendor/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('public/assets/js/pages/form-advanced.init.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Plugins js -->
        <script src="{{asset('public/assets/js/vendor/jquery.dataTables.js')}}"></script>
        <script src="{{asset('public/assets/js/vendor/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('public/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('public/assets/js/vendor/responsive.bootstrap4.min.js')}}"></script>

        <script>
            $(document).ready(function() {
                // Default Datatable
                $('#basic-datatable').DataTable({
                    "pageLength": 8,
                    "lengthMenu": [[8, 15, 25, 50, -1], [8, 15, 25, 50, "All"]],
                    "language": {
                        "paginate": {
                            "previous": "<i class='mdi mdi-chevron-left'>",
                            "next": "<i class='mdi mdi-chevron-right'>"
                        }
                    },
                    "drawCallback": function () {
                        $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                    }
                });
            });
        </script>
            @yield('script')
    </body>
</html>