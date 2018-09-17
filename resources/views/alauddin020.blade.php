<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <!-- Bangla Font Settings -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <!-- CSS FILES -->
    <link href="{{asset('public/assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}" media="screen" data-name="skins">
    <link rel="stylesheet" href="{{asset('public/css/layout/wide.css')}}" data-name="layout">

    <link rel="stylesheet" type="text/css" href="{{asset('public/css/switcher.css')}}" media="screen" />
</head>
<body>
    <!--Start Header-->
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs top-info">
                        <span><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
                        <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
                    </div>
                    <div class="col-sm-5 top-info">
                        <ul>
                            <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                            <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO bar -->
        <div id="logo-bar" class="clearfix">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Logo / Mobile Menu -->
                    <div class="col-xs-12">
                        <div id="logo">
                            <h1><a href="{{ url('/') }}"><img src="{{ asset('public/images/logo.png') }}" alt="Blog Site" /></a></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container / End -->
        </div>
        <!--LOGO bar / End-->

        <!-- Navigation
================================================== -->
        <div class="navbar navbar-default navbar-static-top container" role="navigation">
            <!--  <div class="container">-->
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>

                        @if (Auth::check())
                            <li><a href="{{ route('admin.loginDashboard') }}">Dashboard</a></li>
                        @endif

                        {{-- <li><a href="#">Pages</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="about.html">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About Us 1</a></li>
                                        <li><a href="about-2.html">About Us 2</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="services.html">Services</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="404-page.html">404 Page</a></li>
                            </ul>
                        </li> --}}

                        <li><a href="#">Portfolio</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="portfolio_2.html">Portfolio 2</a></li>
                                <li><a href="portfolio_3.html">Portfolio 3</a></li>
                                <li><a href="portfolio_4.html">Portfolio 4</a></li>
                                <li>
                                    <a href="portfolio_single.html">Portfolio Single</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio_single.html">Portfolio Single 1</a></li>
                                        <li><a href="portfolio_single_2.html">Portfolio Single 2</a></li>
                                        <li><a href="portfolio_single_3.html">Portfolio Single 3</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>

                        {{-- <li class=""><a href="#">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-large-image.html">Large Image</a></li>
                                <li class=""><a href="blog-medium-image.html">Medium Image</a></li>
                                <li><a href="blog-post.html">Single Post</a></li>
                            </ul>
                        </li> --}}

                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.row -->
            <!--</div>--><!--/.container -->
        </div>
    </header>
    <!--End Header-->
    
    <!--start wrapper-->
    <section class="wrapper">
        <div class="container">
            <div class="card" style="height: 50px;background-color: #eee">
            
             </div>
        </div>

        @yield('content')
        
    </section>
    <!--end wrapper-->

    <!--start footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>About Us</span></h4>
                    </div>
                    <div class="widget_content">
                        <p>Donec earum rerum hic tenetur ans sapiente delectus, ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores.</p>
                        <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: #2021 Lorem Ipsum</p></li>
                            <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 9000-12345</p></li>
                            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mail@example.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Recent Posts</span></h4>
                    </div>
                    <div class="widget_content">
                      <ul class="links">
                            <li><a href="#">Aenean commodo ligula eget dolor<span>November 07, 2014</span></a></li>
                            <li><a href="#">Temporibus autem quibusdam <span>November 05, 2014</span></a></li>
                            <li><a href="#">Debitis aut rerum saepe <span>November 03, 2014</span></a></li>
                            <li><a href="#">Et voluptates repudiandae <span>November 02, 2014</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Twitter</span></h4>
                    </div>
                    <div class="widget_content">
                        <ul class="tweet_list">
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2014</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2014</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2014</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget_content">
                        <div class="tweet_go"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Flickr Gallery</span></h4>
                    </div>
                    <div class="widget_content">
                        <div class="flickr">
                            <ul id="flickrFeed" class="flickr-feed"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->
    
    <section class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="copyright">&copy; Copyright 
                        {{ date('Y') }} | Powered by  <a href="http://www.bestjquery.com/">Best jQuery</a></p>
                </div>
                
                <div class="col-lg-6 ">
                    <div class="footer_social">
                        <ul class="footbot_social">
                            <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                            <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('public/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.easing.1.3.js') }} "></script>
    <script src="{{ asset('public/js/retina-1.1.0.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.cookie.js') }} "></script> 
    <!-- jQuery cookie -->
    <script type="text/javascript" src="{{ asset('public/js/styleswitch.js') }}"></script>
     <!-- Style Colors Switcher -->
    <script type="text/javascript" src="{{ asset('public/js/jquery.smartmenus.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.smartmenus.bootstrap.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.jcarousel.js') }} "></script>
    <script type="text/javascript" src="{{ asset('public/js/jflickrfeed.js') }} "></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.magnific-popup.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.isotope.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('public/js/swipe.js') }} "></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.blurr.js') }} "></script>
    
    <script src="{{asset('public/assets/js/vendor/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
</body>
</html>
