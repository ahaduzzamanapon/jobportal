<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('font/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/selectize.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/metismenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/simplebar.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/dropzone.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('font/assets/css/dashboard.css')}}">
		<link rel="stylesheet" href="{{asset('font/assets/css/responsive.css')}}">

        <title>   @php

            $sitesettings= DB::table('settings')->select('sitename','titelname')->first();

            @endphp
              {{$sitesettings->titelname}}</title>

        <link rel="icon" type="image/png" href="{{asset('font/assets/images/favicon.png')}}">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        <header class="main-header-area">
            <!-- Start Topbar Area -->
            <div class="topbar-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <ul class="topbar-social-list">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <ul class="topbar-action">
                                @if($userdata)



                                <li>
                                    <a href="{{ 'userprofile/'.$userdata->id }}"><i class="flaticon-user"></i>{{$userdata->name}}   </a>
                                </li>

                                <li>
                                    <a href="{{ 'userprofile/'.$userdata->id }}"><i class="flaticon-user"></i>View Profile</a>
                                </li>
                                <li>
                                    <a href="{{ '/logout'}}"><i class="flaticon-user"></i>Logout</a>
                                </li>


                                @else
                                <li>
                                    <a href="{{'/registation'}}"><i class="flaticon-user"></i>Login  ||  Register</a>
                                </li>



                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar Area -->

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="container">
                        <div class="main-responsive-menu">
                            <div class="logo">
                                <a href="{{ '/' }}">
                                    <h2 class="text">{{$sitesettings->sitename}}</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-navbar">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{ '/' }}">
                                <h2 class="text text-white">{{$sitesettings->sitename}}</h2>
                            </a>


                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Header Area -->





        <!-- Start Page Banner Area -->
        <div class="page-banner-area item-bg-two">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Job List Area -->
        <div class="job-list-area pb-100 justify-content-center">
            <div class="container-fluid justify-content-center">
                <div class="row justify-content-center">


                    <div class="col-lg-9 col-md-12  pt-100">
                        <div class="job-list-search-box">
                            <h3>Find Your Dream Job</h3>
                            <div class="job-block-item">
                        <div class="row align-items-center">


                        <div class="col-lg-12 col-sm-12">

                            <form  action="{{ url('/searchdata') }}" method="post" class="job-list-search-form justify-content-center ">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label><i class="flaticon-edit"></i></label>



                                            <input name="Keywords" class="form-control" type="text" placeholder="Keywords">






                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label><i class="flaticon-placeholder"></i></label>


                                            <select name="location" class="selectize-filter">

                                              <option value="">Location</option>


                                                @foreach ($location as $data )
                                                <option value="{{ $data->id }}">{{ $data->location }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label><i class="flaticon-list"></i></label>
                                            <select name="catname" class="selectize-filter">


                                             <option value="">Categories</option>


                                                @foreach ($catdata as $data )
                                                <option value="{{ $data->id }}">{{ $data->catname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="search-btn">
                                        <button type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




                        </div>
                        @if(!$jobdatacount)

                        <div class="job-block-item">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-sm-10">
                                    <div class="job-list-inner-box">
                                        <div class="row ">
                                            <div class="col-lg-9">
                                                <div class="job-list-box">
                                                    <p>

                                                        <h4 class="text text-danger"> There is no Job found Search Again</h4>
                                                    </p>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @else
                        <p class="text text-success">There are {{ $jobdatacount }} Job found</p>

                        @foreach ($jobdata as $data )



                        <div class="job-block-item">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-sm-10">
                                    <div class="job-list-inner-box">
                                        <div class="row ">
                                            <div class="col-lg-9">
                                                <div class="job-list-box">
                                                    <div class="job-information">
                                                        <div class="title-box">
                                                            <h3 class="text text-success">
                                                                <a class="text text-success" href="{{ 'userjobview/'.$data->id }}">{{ $data->jobtitle }}</a>
                                                            </h3>
                                                            <span>{{ $data->jobcompany }}</span>
                                                        </div>


                                                    </div>

                                                    <ul class="location-information">
                                                        <li>Dadline: {{ $data->deadline }}</li>
                                                        <li>Location: {{ $data->jobaddress }}</li>

                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="job-list-optional">
                                                    <a href="{{ 'userjobview/'.$data->id }}" class="default-btn">Apply Jobs <i class="flaticon-list-1"></i></a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        {{--  <div class="load-more-btn">
                            <a href="#" id="loadmore" class="default-btn">Load More</i></a>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Job List Area -->




        <!-- Start Footer Area -->
        {{--  <footer class="footer-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="widget-logo">
                                <a href="index.html"><img src="{{asset('font/assets/images/logo-2.png')}}" alt="image"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consetet ur sadipscing elitr sed diam nonumy eirmod tempor invidunt labore.</p>

                            <ul class="widget-social-links">
                                <li><span>Follow:</span></li>

                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget ps-5">
                            <h3>Company</h3>

                            <ul class="quick-links">
                                <li><a href="about-us.html">About Eeza</a></li>
                                <li><a href="job-listing-2.html">Browse Jobs</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="candidates-dashboard.html">Candidate Dashboard</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Resources</h3>

                            <ul class="quick-links">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="dashboard-post-job.html">Post A Job</a></li>
                                <li><a href="candidates-1.html">Candidates</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Quick Contact</h3>

                            <ul class="widget-info">
                                <li>
                                    <i class="flaticon-a"></i>
                                    32, Wales Street, New York, USA
                                </li>

                                <li>
                                    <i class="flaticon-p"></i>
                                    <a href="tel:00901361246725">(009)01361246725</a>
                                </li>

                                <li>
                                    <i class="flaticon-e"></i>
                                    <a href="mailto:hello@eeza.com">hello@eeza.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <p><i class="ri-copyright-line"></i> 2021 Eeza. All Rights Reserved by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </footer>  --}}
        <!-- End Footer Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-line"></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Links of JS files -->
        <script src="{{asset('font/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('font/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('font/assets/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('font/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('font/assets/js/jquery.appear.js')}}"></script>
        <script src="{{asset('font/assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('font/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('font/assets/js/fancybox.min.js')}}"></script>
        <script src="{{asset('font/assets/js/selectize.min.js')}}"></script>
        <script src="{{asset('font/assets/js/TweenMax.min.js')}}"></script>
        <script src="{{asset('font/assets/js/aos.js')}}"></script>
        <script src="{{asset('font/assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('font/assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('font/assets/js/dropzone.min.js')}}"></script>
        <script src="{{asset('font/assets/js/sticky-sidebar.min.js')}}"></script>
		<script src="{{asset('font/assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('font/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('font/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('font/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('font/assets/js/main.js')}}"></script>
    </body>
</html>

