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




{{--  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>tinymce.init({selector:'textarea'});</script>

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">  --}}

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




            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Post a New Job</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="{{ '/employedashboard'}}">Home</a></li>
                    <li class="item"><a href="{{ '/employedashboard'}}">Dashboard</a></li>
                    <li class="item">Post a New Job</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->

            <!-- Start Post a New Job Area -->
            <div class="post-a-new-job-box">
                <h3>Post Your Job</h3>




                @if($progress>80)



                <form method="post" action="{{ url('/jobstor') }}">
                   @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input name="jobtitle" type="text" class="form-control" placeholder="Job Title Here">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea id="description" name="jobdescription" cols="30" rows="6" placeholder="Short description..." class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input name="jobcompany" type="text" class="form-control" placeholder="Company Name...">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Responsibilities</label>
                                <textarea id="responsibilities" name="jobresponsibilities" cols="30" rows="6" placeholder="Responsibilities..." class="form-control"></textarea>
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="jobemail" id="email" type="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Categories</label>

                                <select name="jobcategories" class="selectize-filter">

                                    @foreach($showdata as $key=>$data )
                                    <option value="{{ $data->id }}">{{ $data->catname }}</option>


                                    @endforeach


                                </select>
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Offered Salary</label>

                                <select name="offeredsalary" class="selectize-filter">
                                    <option value="0">Select</option>
                                    <option value="1500">1500</option>
                                    <option value="2500">2500</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Experience</label>
                                <textarea id="experience" name="jobexperience" cols="30" rows="6" placeholder="Experience..." class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Education</label>
                                <textarea id="education" name="jobeducation" cols="30" rows="6" placeholder="Education..." class="form-control"></textarea>
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Gender</label>

                                <select name="jobgender"  class="selectize-filter">

                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>

                            <div class="form-group my-5">
                                <label>Application Deadline Date</label>
                                <input name="deadline" type="date"  placeholder="Application Deadline Date">
                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>City</label>

                                <select name="jobcity" class="selectize-filter">
                                    @foreach($showlocation as $data )
                                    <option value="{{ $data->id }}">{{ $data->location }}</option>


                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Complete Address</label>
                                <input name="jobaddress" type="text" class="form-control" placeholder="32, Wales Street, Dhaka, Bangladesh">
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Post A Job <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>

                @else

                <h2 class="text text-danger">Please update <a href="{{ '/companyprofile'}}"> profile</a> then try again.... </h2>
                @endif

            </div>
            <!-- End Post a New Job Area -->



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
        <script src="{{asset('font/assets/js/jquery-3.6.0.min.js')}}"></script>






        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Summernote JS - CDN Link -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


            {{--  summernot scrept  --}}
            <script src="{{asset('font/assets/js/jquery-3.6.0.min.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Summernote JS - CDN Link -->
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        {{--  <script>
            $(document).ready(function() {
                $("#education").summernote();
                $('.dropdown-toggle').dropdown();

            });
            $(document).ready(function() {
                $("#experience").summernote();
                $('.dropdown-toggle').dropdown();
            });
            $(document).ready(function() {
                $("#responsibilities").summernote();
                $('.dropdown-toggle').dropdown();
            });
            $(document).ready(function() {
                $("#description").summernote();
                $('.dropdown-toggle').dropdown();

            });
            tinymce.init({
                selector: '#experience'
            });
        </script>  --}}



        tinymce.init({
            selector: '#experience'
        });


        {{--  summernot screept end  --}}


    </body>
</html>
