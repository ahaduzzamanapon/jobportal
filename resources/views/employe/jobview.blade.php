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



        <!-- Start Sidemenu Area -->
        <div class="sidemenu-area">
            <div class="sidemenu-header">
                <a href="{{ '/employedashboard'}}" class="navbar-brand d-flex align-items-center">
                    <h2>{{$sitesettings->sitename}}</h2>
                </a>


            </div>

            <div class="sidemenu-body">
                <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
                    <li class="nav-item active">
                        <a href="{{ '/employedashboard'}}" class="nav-link">
                            <span class="icon"><i class="ri-home-line"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ '/companyprofile'}}" class="nav-link">
                            <span class="icon"><i class="ri-user-line"></i></span>
                            <span class="menu-title">Company Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('employe/postjob')}}" class="nav-link">
                            <span class="icon"><i class="ri-send-plane-fill"></i></span>
                            <span class="menu-title">Post a New Job</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/employe/managejob')}}" class="nav-link">
                            <span class="icon"><i class="ri-briefcase-line"></i></span>
                            <span class="menu-title">Manage Jobs</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-applicants.html" class="nav-link">
                            <span class="icon"><i class="ri-file-list-line"></i></span>
                            <span class="menu-title">All Applicants</span>
                        </a>
                    </li>








                    <li class="nav-item">
                        <a href="{{'/logout'}}" class="nav-link">
                            <span class="icon"><i class="ri-logout-circle-r-line"></i></span>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <!-- End Sidemenu Area -->

        <!-- Start Main Dashboard Content Wrapper Area -->
        <div class="main-dashboard-content d-flex flex-column">





            <!-- Start Job Details Area -->
            <div class="job-details-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="job-details-desc">
                                <h2 class="text text-success">{{ $data->jobtitle}}</h2>
                                <p>{{ $data->jobdescription}}</p>

                                <div class="job-details-content">
                                    <h3>Job Responsibilities:</h3>

                                    <p>{{ $data->jobresponsibilities}}</p>
                                </div>

                                <div class="job-details-content">
                                    <h3>Education:</h3>
                                    <p>{{ $data->jobeducation}}</p>


                                </div>

                                <div class="job-details-content">
                                    <h3>Experience:</h3>

                                    <p>{{ $data->jobexperience}}</p>
                                </div>




                            </div>

                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="job-details-sticky">
                                <div class="job-details-information">
                                    <div class="information-box">



                                    </div>

                                    <ul class="information-list-box">
                                        <li>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="flaticon-calendar"></i>Company Name</span>
                                                 {{ $data->jobcompany}}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="flaticon-calendar"></i> Date Posted</span>
                                                 {{ $data->created_at}}
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="flaticon-reload"></i> Expiration Date</span>
                                                {{ $data->deadline}}
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="flaticon-location"></i> Location</span>
                                                jobaddress
                                                {{ $data->jobaddress}}
                                            </div>


                                        <li>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><i class="flaticon-money"></i> Rate</span>
                                                {{ $data->offeredsalary}}
                                            </div>
                                        </li>

                                        <li>

                                        </li>
                                    </ul>




                                    <div class=" btn btn-danger">
                                        <a href="{{ '/employ/delletjob/'.$data->id }}" onclick="return confirm('Are you sure to delete')" >Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Job Details Area -->







        </div>


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
