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
                        <a href="{{url('/employe/applicantslist')}}" class="nav-link">
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

            <div class="progress">

                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                aria-valuemin="0" aria-valuemax="100" style="width:{{$employ->progress}}%">
                  <span class="sr-only">    {{$employ->progress}}% Complete</span>
                </div>
              </div>



            

            <!-- Start Company Profile Area -->
            <div class="my-profile-box">
                <h3>Profile Details</h3>

                <form action="{{url('/updateprofileemploy/'.$employ->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group profile-box">
                                <img @if($employ->image)
                                src="images/{{$employ->image}}"



                                @else

                                src="{{asset('images/companyname.png')}}"
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
                                <label>Company name (optional)</label>
                                <input name="companyname" value="{{$employ->companyname}}" type="text" class="form-control" placeholder="Company name..">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email address</label>
                                <input name="email" value="{{$employ->email}}" type="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" value="{{$employ->phone}}" type="text" class="form-control" placeholder="+88 (123) 123456">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Website</label>
                                <input name="website" value="{{$employ->website}}" type="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>About Company</label>
                                <input name="aboutcompany" value="{{$employ->aboutcompany}}" type="text" class="form-control" placeholder="About Company">
                            </div>
                        </div>










                        <div class="col-xl-6 col-lg-12 col-md-12">

                            <div class="form-group">
                                <label>City</label>

                                <select name="city" class="selectize-filter">
                                    @if ($locationdata)




                                                    <option value="{{$locationdata->id}}">{{$locationdata->location}}</option>
                                                    @endif
                                                    <option value=""></option>



                                    @foreach ($location as $data )


                                    <option value="{{$data->id}}">{{$data->location}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Complete Address</label>
                                <input name="completeaddress" value="{{$employ->completeaddress}}" type="text" class="form-control" placeholder="Complete Address">
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Facebook URL</label>
                                <input name="facebook" value="{{$employ->facebook}}" type="text" class="form-control" placeholder="https://www.facebook.com/">
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Linkedin URL</label>
                                <input name="linkedin" value="{{$employ->linkedin}}" type="text" class="form-control" placeholder="https://www.linkedin.com/">
                            </div>
                        </div>




                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Submit Now <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Company Profile Area -->



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
