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

        <link rel="icon" type="image/png" href="assets/images/favicon.png">

        <style>
            img {
              border: 1px solid #ddd;
              border-radius: 4px;
              padding: 5px;
              width: 300px;
              height: 300px;
            }

            img:hover {
              box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
            }
            </style>
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
        <!-- Start Sidemenu Area -->
        <div class="sidemenu-area">
            <div class="sidemenu-header">
                <a href="{{ '/userdasboard'}}" class="navbar-brand d-flex align-items-center">
                    <h2 class="text">{{$sitesettings->sitename}}</h2>
                </a>

                <div class="responsive-burger-menu d-block d-lg-none">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
            </div>

            <div class="sidemenu-body">
                <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
                    <li class="nav-item">
                        <a href="{{ '/userdasboard'}}" class="nav-link">
                            <span class="icon"><i class="ri-home-line"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a href="{{ '/userprofile'}}" class="nav-link">
                            <span class="icon"><i class="ri-user-line"></i></span>
                            <span class="menu-title">My Profile</span>
                        </a>
                    </li>

                    {{--  <li class="nav-item">
                        <a href="candidates-dashboard-my-resume.html" class="nav-link">
                            <span class="icon"><i class="ri-file-list-line"></i></span>
                            <span class="menu-title">My Resume</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-applied-job.html" class="nav-link">
                            <span class="icon"><i class="ri-briefcase-line"></i></span>
                            <span class="menu-title">Applied Jobs</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-job-alerts.html" class="nav-link">
                            <span class="icon"><i class="ri-notification-3-line"></i></span>
                            <span class="menu-title">Job Alerts</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-shortlisted-job.html" class="nav-link">
                            <span class="icon"><i class="ri-bookmark-line"></i></span>
                            <span class="menu-title">Shortlisted Jobs</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-cv-manager.html" class="nav-link">
                            <span class="icon"><i class="ri-book-line"></i></span>
                            <span class="menu-title">CV Manager</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-packages.html" class="nav-link">
                            <span class="icon"><i class="ri-stack-fill"></i></span>
                            <span class="menu-title">Packages</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-messages.html" class="nav-link">
                            <span class="icon"><i class="ri-chat-1-line"></i></span>
                            <span class="menu-title">Messages</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-invoice.html" class="nav-link">
                            <span class="icon"><i class="ri-price-tag-line"></i></span>
                            <span class="menu-title">Invoice</span>
                        </a>
                    </li>  --}}

                    <li class="nav-item">
                        <a href="dashboard-change-password.html" class="nav-link">
                            <span class="icon"><i class="ri-lock-line"></i></span>
                            <span class="menu-title">Change Password</span>
                        </a>
                    </li>

                    {{--  <li class="nav-item">
                        <a href="dashboard-my-profile.html" class="nav-link">
                            <span class="icon"><i class="ri-user-line"></i></span>
                            <span class="menu-title">View Profile</span>
                        </a>
                    </li>  --}}

                    <li class="nav-item">
                        <a href="{{ '/logout'}}" class="nav-link">
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



            



            <div class="progress">

                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                aria-valuemin="0" aria-valuemax="100" style="width:{{$userdata->progress}}%">
                  <span class="sr-only">    {{$userdata->progress}}% Complete</span>
                </div>
              </div>




            <!-- Start My Profile Area -->
            <div class="my-profile-box">

                <h3>Profile Details</h3>

                <form action="{{url('/updateprofile/'.$userdata->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group profile-box">
                                <img @if($userdata->image)
                                src="images/{{$userdata->image}}"



                                @else

                                src="{{asset('font/assets/images/my-profile.jpg')}}"
                                @endif alt="image">
                                <div class="file-upload">
                                    <input type="file" name="image" id="file" class="inputfile" />
                                    <label for="file"><i class="ri-upload-2-line"></i> Upload Photo</label>
                                </div>

                                <div class="text">
                                    <p>Max file size is 5MB, Minimum dimension: 300x300 And Suitable files are .jpg & .png</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Andy Smith" value="{{$userdata->name}}">
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="hello@andysmith.com" value="{{$userdata->email}}">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="+880" value="{{$userdata->phone}}">
                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Current Salary($)</label>

                                <input type="text" name="currentsalary" class="form-control" placeholder="Current Salary" value="{{$userdata->currentsalary}}">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Expected Salary($)</label>

                                <input type="text" name="expectedsalary" class="form-control" placeholder="Expected Salary" value="{{$userdata->expectedsalary}}">
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Age</label>

                                <input type="text" name="age" class="form-control" placeholder="Age" value="{{$userdata->age}}">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Education Levels</label>
                                <input type="text" name="educationlevels" value="{{$userdata->educationlevels}}" class="form-control" placeholder="Education Levels">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Languages</label>
                                <input type="text" name="languages" value="{{$userdata->languages}}" class="form-control" placeholder="English, Turkish">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$userdata->description}}" class="form-control" placeholder="Description">
                            </div>
                        </div>








                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Complete Address</label>
                                <input type="text" name="completeaddress" value="{{$userdata->completeaddress}}" class="form-control" placeholder="Complete Address">
                            </div>
                        </div>







                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Facebook URL</label>
                                <input type="text" value="{{$userdata->facebook}}" name="facebook" class="form-control" placeholder="https://www.facebook.com/">
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Linkedin URL</label>
                                <input type="text"  name="linkedin" value="{{$userdata->linkedin}}" class="form-control" placeholder="https://www.linkedin.com/">
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Save Change <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End My Profile Area -->



        </div>
        <!-- End Main Dashboard Content Wrapper Area -->

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
