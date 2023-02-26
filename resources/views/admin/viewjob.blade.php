<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   @php

        $sitesettings= DB::table('settings')->select('sitename','titelname')->first();

        @endphp
          {{$sitesettings->titelname}}</title>

    <link href="{{url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg" type="image/x-icon')}}">
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
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{'/admin'}}"><h2>{{$sitesettings->sitename}}</h2></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                @include('admin/sidebar-menu')
                {{--  menu end  --}}
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>


                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
         {{--  ss  --}}
        <div id="main">


           






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
                                        @if($data->jobstutus==0)
                                        <div class=" btn btn-primary">
                                            <a href="{{ '/admin/aprovejob/'.$data->id }}" class=" text-light ">Approve </a>
                                        </div
                                        @else
                                        <div class=" btn btn-danger">
                                            <a href="{{ '/admin/disablejob/'.$data->id }}" class=" text-light ">Disable </a>
                                        </div>


                                        @endif



                                        <div class=" btn btn-danger">
                                            <a href="{{ '/admin/delletjob/'.$data->id }}" onclick="return confirm('Are you sure to delete')" >Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Job Details Area -->











            </div>


        </div>
    </div>

    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
