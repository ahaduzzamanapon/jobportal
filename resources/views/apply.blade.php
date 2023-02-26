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
        <style>




            .zone {
                margin: auto;
                position: absolute;
                top: 0; left: 0; bottom: 0; right: 0;
                background: radial-gradient(ellipse at center,#356eff 0,#2f79c9 100%);
                width: 80%;
                height: 25%;
                border:5px dashed white;
                text-align:center;
                color: white;
                z-index: 20;
                transition: all 0.3s ease-out;
                box-shadow: 0 0 0 1px rgba(255,255,255,.05),inset 0 0 .25em 0 rgba(0,0,0,.25);
                .btnCompression {
                  .btn {

                  }
                  .active {
                    background: #5f5aeb;
                    color:white;
                  }
                }
                i {
                  text-align: center;
                  font-size: 10em;
                  color:#fff;
                  margin-top: 50px;
                }
                .selectFile {
                  height: 50px;
                  margin: 20px auto;
                  position: relative;
                  width: 200px;
                }

                label, input {
                  cursor: pointer;
                  display: block;
                  height: 50px;
                  left: 0;
                  position: absolute;
                  top: 0;
                  width: 100%;
                  border-radius: 5px;
                }

                label {
                  background: #fff;
                  color:#5a81eb;
                  display: inline-block;
                  font-size: 1.2em;
                  line-height: 50px;
                  padding: 0;
                  text-align: center;
                  white-space: nowrap;
                  text-transform: uppercase;
                  font-weight: 400;
                  box-shadow: 0 1px 1px gray;
                }

                input[type=file] {
                  opacity: 0;
                }

              }
              .zone.in {
                color:white;
                border-color:white;
                background: radial-gradient(ellipse at center,#5a5feb 0,#2f74c9 100%);
                i {
                  color:#fff;
                }
                label {
                  background: #fff;
                  color:#5a7eeb;
                }
              }
              .zone.hover {
                color:gray;
                border-color:white;
                background:#fff;
                border:5px dashed gray;
                i {
                  color:#EB6A5A;
                }
                label {
                  background: #fff;
                  color:#5a8deb;
                }
              }
              .zone.fade {
                transition: all 0.3s ease-out;
                opacity: 1;
              }
        </style>

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


                            <form action="{{url('/uplodecv/'.$jobid)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                <div class="zone">
                                    <h4>Please Uplode Your CV</h4>

                                    <div id="dropZ">
                                    <i class="fa fa-cloud-upload"></i>
                                    <div>Drag and drop your file here</div>
                                    <span>OR</span>
                                    <div class="selectFile">
                                        <label for="file">Select file</label>
                                        <input type="file" name="file" id="file">
                                    </div>
                                    <p>File size limit : 10 MB</p>
                                    </div>

                                    <input value="Apply" type="submit" class="btn btn-primary my-5">


                                </div>

                            </div>

                             </form>


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
        <script>



            $(document).bind('dragover', function (e) {
                var dropZone = $('.zone'),
                    timeout = window.dropZoneTimeout;
                if (!timeout) {
                    dropZone.addClass('in');
                } else {
                    clearTimeout(timeout);
                }
                var found = false,
                    node = e.target;
                do {
                    if (node === dropZone[0]) {
                        found = true;
                        break;
                    }
                    node = node.parentNode;
                } while (node != null);
                if (found) {
                    dropZone.addClass('hover');
                } else {
                    dropZone.removeClass('hover');
                }
                window.dropZoneTimeout = setTimeout(function () {
                    window.dropZoneTimeout = null;
                    dropZone.removeClass('in hover');
                }, 100);
            });
        </script>
    </body>
</html>

