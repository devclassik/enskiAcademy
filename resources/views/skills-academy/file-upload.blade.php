<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Enski - Nigeria's leading empowerment platform</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.png')}}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>


</head>

<!-- this is for entertainment home 11 -->
<body class="home11">
<div class="offwrap"></div>
<!--Preloader area start here-->
<div id="loader" class="loader">
    <div class="loader-container"></div>
</div>
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">

    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header style3 header-transparent">
            <!-- Topbar Area Start -->
            <div class="topbar-area style2 modify1">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-8">
                            <div class="topbar-contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:support@enski.com.ng">support@enski.com.ng</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:++234 0)8162237272"> +234 (0) 8162237272</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        Abuja-Keffi Rd, Nassarawa
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 text-right">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li class="opening"> <em><i class="flaticon-clock"></i> 12:01pm-6:00pm</em> </li>
                                    <li><a href="https://www.twitter.com/enski_connect"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://fb.me/enski.impact.summit"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/enski-integrated-services/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/enski_impact_summit/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo-part">
                                <a href="index.html">
                                    <img class="normal-logo" src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                                    <img class="sticky-logo" src="{{asset('assets/images/logo-dark.png')}}" alt="logo">
                                </a>
                            </div>
                            <div class="mobile-menu">
                                <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <nav class="rs-menu pr-70 md-pr-0">
                                        <ul id="onepage-menu" class="nav-menu">
                                            <li> <a href="#rs-header">Home</a></li>
                                            <li><a href="#rs-about">Our Channel</a></li>
                                            <li class="menu-item"><a href="#rs-services">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="">Entertainment</a> </li>
                                                    <li><a href="">Skills Academy</a> </li>
                                                    <li><a href="">Branding Agency</a></li>
                                                    <li><a href="">Financial Services</a></li>
                                                    <li><a href="">Skill Set Connector</a> </li>
                                                    <li><a href="">Logistics</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href="#rs-portfolio">Daily Theme</a></li>
                                            <li><a href="#rs-team">Team</a></li>
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul> <!-- //.nav-menu -->
                                    </nav>
                                </div> <!-- //.main-menu -->
                                <div class="expand-btn-inner hidden-md">
                                    <ul>
                                        <li class="sidebarmenu-search">
                                            <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
            <div class="canvas-logo">
                <a href="/entertainment"><img src="{{asset('assets/images/logo-dark.png')}}" alt="logo"></a>
            </div>
            <div class="offcanvas-text">
                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>
            </div>
            <div class="canvas-contact">
                <h5 class="canvas-contact-title">Contact Info</h5>
                <ul class="contact">
                    <li><i class="fa fa-globe"></i>Middle Badda, Dhaka, BD</li>
                    <li><i class="fa fa-phone"></i>+123445789</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
                    <li><i class="fa fa-clock-o"></i>10:00 AM - 11:30 PM</li>
                </ul>
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </div>
    <!--Full width header End-->

    <!-- Banner Section Start -->
    <div class="rs-banner style7 modify3 rs-rain-animate">
        <div class="container">
            <div class="row">

                @include('sweetalert::alert')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>
        <div class="line-inner style2 orange-dark">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Choose Section Start -->
    <div class="rs-why-choose style2 modify1 rs-rain-animate pt-120 pb-120 md-pt-70 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 md-mb-30">
                    <div class="sec-title mb-40">
                        <div class="sub-text style4-bg left white-color">Let's Talk</div>
                        <h2 class="title pb-20 white-color">
                            Get Creative
                        </h2>
                        <div class="desc white-color">
                            Feel free to reach out to us with your creative ideas or works, content suggestions and even just for interactive purposes.
                        </div>
                    </div>
                    <div class="services-wrap mb-25">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/choose/icons/style2/1.png')}}" alt="">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="mailto:support@enski.com.ng">Email</a></h3>
                            <p class="services-txt"><a href="mailto:support@enski.com.ng">entertainment@enski.com.ng</a></p>
                        </div>
                    </div>
                    <div class="services-wrap mb-25">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/choose/icons/style2/2.png')}}" alt="">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="tel:(+234)8162237272">Call Us | Whatsapp</a></h3>
                            <p class="services-txt"><a href="tel:(+234)8162237272"> +2348162237272</a></p>
                        </div>
                    </div>
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/choose/icons/style2/3.png')}}" alt="">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="#">Social Handles</a></h3>
                            <p class="services-txt">
                                <a href="https://www.instagram.com/enski_impact_summit/" target="_blank">Instagram: enski_entertainment</a><br>
                                <a href="https://t.me/enski_entertainment" target="_blank">Telegram: enski_entertainment_admin</a><br>
                                <a href="https://fb.me/enski.impact.summit" target="_blank">Facebook: Enski Connect</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="rs-contact mod1">
                        <div class="contact-wrap">
                            <div class="content-part mb-25">
                                <h2 class="title mb-15">Upload your Video</h2>
                                <p class="desc">We are here to help you 24/7 with experts</p>
                            </div>
                            <div id="appointment-messages"></div>

                            <form method="post" action="{{url('file/upload')}}" enctype="multipart/form-data"
                                  class="dropzone" id="dropzone" >
                                @csrf
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="line-inner orange-dark">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Choose Section End -->


</div>
<!-- Main content End -->


<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 1024,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("image/delete") }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script>

<!-- modernizr js -->
@include('components.scripts')

