@include('components.header')
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">

    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Topbar Area Start -->
            <div class="topbar-area">
                <div class="container">
                    <div class="row rs-vertical-middle">
                        <div class="col-lg-2">
                            <div class="logo-part">
                                <a href="/homepage"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10 text-right">
                            <ul class="rs-contact-info">
                                <li class="contact-part">
                                    <i class="flaticon-location"></i>
                                    <span class="contact-info">
                                        <span>Address</span>Abuja-Keffi Rd, Nassarawa
                                    </span>
                                </li>
                                <li class="contact-part">
                                    <i class="flaticon-email"></i>
                                    <span class="contact-info">
                                                <span>E-mail</span>
                                                <a href="mailto:support@enski.com.ng"> support@enski.com.ng</a>
                                            </span>
                                </li>
                                <li class="contact-part no-border">
                                    <i class="flaticon-call"></i>
                                    <span class="contact-info">
                                        <span>Phone</span>+2348162237272
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="logo-area">
                        <a href="/homepage">
                            <img class="sticky-logo" src="{{asset('assets/images/logo-dark.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="rs-menu-area">
                        <div class="main-menu">
                            <div class="mobile-menu">
                                <a href="/homepage" class="mobile-logo">
                                    <img src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                                </a>
                                <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <li class="rs-mega-menu"> <a href="/homepage">Home</a> <!-- //.mega-menu -->
                                    </li>
                                    <li class="current-menu-item">
                                        <a href="#">About</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="/entertainment">Entertainment</a> </li>
                                            <li><a href="/skills-academy">Skills Academy</a> </li>
                                            <li><a href="/branding">Branding Agency</a></li>
                                                {{--     add a comming soon page @todo--}}
                                            <li><a href="#">Financial Services</a></li>
                                            <li><a href="#">Skill Set Connector</a> </li>
                                            <li><a href="#">Logistics</a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="/blog">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="/blog">Blog</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                    </div>
                    <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                        <ul>
                            <li class="sidebarmenu-search">
                                <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                    <i class="flaticon-search"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="toolbar-sl-share">
                        <ul class="social">
                            <li><a href="https://www.twitter.com/enski_connect"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://fb.me/enski.impact.summit"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/enski-integrated-services/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/enski_impact_summit/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">About</h1>
            <ul>
                <li title="Enski - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="/hompage">Home</a>
                </li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-30">
                    <div class="rs-animation-shape">
                        <div class="images">
                            <img src="{{asset('assets/images/about/about-3.png')}}" alt="">
                        </div>
                        <div class="middle-image2">
                            <img class="dance3" src="{{asset('assets/images/about/effect-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style-bg">Our Mission</div>
                            <!--h2 class="title pb-38">
                                Remember the uncertainties that the COVID-19 Pandemic came with?
                            </h2> <-->                               
                            <div class="desc pb-35">
                                To create a unified platform that converts ideas into realities, perfects innovations and uplifts people in the core aspect of life.
                            </div>
                            <div class="sub-text style-bg">Our Vision</div>
                                <div class="desc pb-35"> 
                                To give the world direct access to wealth and happiness by connecting and elevating people and innovations towards their full potential.
                            </div>
                            
                            <div class="sub-text style-bg">Our Story</div>
                            <div class="desc pb-35">
                                <i>In 2020 during the COVID-19 Pandemic, the unemployment rate was at an all time high with so many people losing their jobs and the younger generation graduating universities/ colleges with no jobs to turn to. This lead to insane levels of  financial insecurity and instability. It was in this moment of uncertainties that Enski was launched to put a smile on these faces as an entertainment network while also giving them access to new financial opportunities.</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-image">
                <img class="top dance" src="{{asset('assets/images/about/dotted-3.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Vision Section Start -->
    <div class="rs-about gray-color pt-90 pb-120 md-pt-50 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pl-60 md-pl-15">
                            <div class="contact-wrap">
                                <div class="sec-title mb-20">
                                    <div class="desc pb-30">
                                       <i>Working with our many clients has helped us confirm that everyone is capable of so much more if given the right information, services and environment which is why ENSKI has evolved to become a MULTI-DISCIPLINARY EMPOWERMENT PLATFORM aimed at not just giving the right information but also providing a support system coupled with qualitative branding solutions that will empower you to financial independence and personal or corporate brand excellence while making sure you are happy in the process with our entertainment network.</i>
                                    </div>
                                </div>
                                <div class="sec-title mb-30">
                                      <div class="desc pb-35"> 
                                        WE TRULY BELIEVE THAT THE WORLD COULD BE FILLED WITH FINANCIALLY SUCCESSFUL AND HAPPY PEOPLE AND WE KNOW WITH OUR HELP, YOU COULD BE BOTH!! 
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="col-lg-6 md-mb-30">
                            <div class="rs-animation-shape">
                                <div class="images">
                                   <img src="assets/images/about/about-3.png" alt=""> 
                                </div>
                                <div class="middle-image2">
                                   <img class="dance3" src="assets/images/about/effect-1.png" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-image">
                        <img class="top dance" src="assets/images/about/dotted-3.png" alt="">
                    </div>
                </div>
            </div>
    <!-- Vision Section End -->

    <!-- Team Section Start -->
    <div class="rs-team pt-120 pb-120 md-pt-80 md-pb-80 xs-pb-54">
        <div class="sec-title2 text-center mb-30">
            <span class="sub-text style-bg white-color">Team</span>
            <h2 class="title white-color">
                Expert IT Consultants
            </h2>
        </div>
        <div class="container">
            <div class="container">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="assets/images/team/style1/1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Makhaia Antitni</a></h4>
                            <span class="designation">President & CEO</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/2.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Corey Anderson</a></h4>
                            <span class="designation">CEO & Founder</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/3.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Masud Rana</a></h4>
                            <span class="designation">Web Developer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/4.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Najmul Huda</a></h4>
                            <span class="designation">Digital Marketer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/5.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Rushali Rumi</a></h4>
                            <span class="designation">Design Lead</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/6.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Abu Sayed</a></h4>
                            <span class="designation">App Developer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/7.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Sonia Akhter</a></h4>
                            <span class="designation">Graphic Artist</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/8.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Rayhan Ali</a></h4>
                            <span class="designation">CEO & Founder</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/9.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Benjir Akther</a></h4>
                            <span class="designation">Graphic Designer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/1.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Makhaia Antitni</a></h4>
                            <span class="designation">President & CEO</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/2.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Corey Anderson</a></h4>
                            <span class="designation">CEO & Founder</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/3.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Masud Rana</a></h4>
                            <span class="designation">Web Developer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="single-team.html"><img src="{{asset('assets/images/team/style1/4.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Najmul Huda</a></h4>
                            <span class="designation">Digital Marketer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services style6 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class=" sec-title mb-30">
                    <center>
                        <h2 class="title">Our Values</h2>
                    </center>
                </div>
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/services/style8/1.png')}}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-title">
                                <h3 class="title"><a href="web-development.html">Team Spirit</a></h3>
                            </div>
                            <p class="services-txt"> We believe in the power of working together and building relationships.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/services/style8/2.png')}}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-title">
                                <h3 class="title"><a href="web-development.html">Integrity</a></h3>
                            </div>
                            <p class="services-txt">We adhere to high moral and professional standards without compromise. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/services/style8/3.png')}}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-title">
                                <h3 class="title"><a href="web-development.html">Creativity</a></h3>
                            </div>
                            <p class="services-txt">We embrace innovations, adaptabibilty and problem solving from out of the box thinking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/services/style8/1.png')}}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-title">
                                <h3 class="title"><a href="web-development.html">Commitment</a></h3>
                            </div>
                            <p class="services-txt">We are consitently dedicated to operational excellence and credibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/services/style8/2.png')}}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-title">
                                <h3 class="title"><a href="web-development.html">Customer-Oriented</a></h3>
                            </div>
                            <p class="services-txt">We are obsessed with puting our customers first in everything we do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{asset('assets/images/services/style8/3.png')}}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-title">
                                <h3 class="title"><a href="web-development.html">Inspire</a></h3>
                            </div>
                            <p class="services-txt"> We inspire everyone and brands to reach their full potential and also make the world  better place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Counter Section Start -->
    <div class="rs-contact-wrap bg5 pt-120 pb-390 md-pt-80">
        <div class="container">
            <div class="sec-title2 text-center mb-30">
                <span class="sub-text style-bg white-color">AIMS AND OBJECTIVES</span>
                <h3 class=" white-color">
                    Enski Road Map For The Next Few Years To Come ! ! !
                </h3>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Video Section End -->
    <div class="rs-video-wrap style2 inner pb-120 md-pb-80">
        <div class="container">
            <div class="row margin-0 gray-color">
                <div class="col-lg-6 padding-0">
                    <div class="video-item">
                        <div class="rs-videos">
                            <div class="animate-border main-home style2">
                                <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 padding-0">
                    <div class="rs-requset">
                        <div class="col-lg-12">
                        <ul class="rs-features-list">
                            <li><i class="fa fa-check"></i><span>Build an entertainment network with growth and learning opportunities.</span></li>
                            <li><i class="fa fa-check"></i><span>Facilitate the smooth transition from the job-oriented economy to a skills-oriented.</span></li>
                            <li><i class="fa fa-check"></i><span>Help atleast 1,000 personal and corporate brands.</span></li>
                            <li><i class="fa fa-check"></i><span>Provide a leading financial support system. </span></li>
                            <li><i class="fa fa-check"></i><span>Assemble an all-inclusive skillsets marketplace.</span></li>
                            <li><i class="fa fa-check"></i><span>Provide a seamless product distribution trajectory.</span></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Section End -->

</div>
<!-- Main content End -->

<!-- Footer Start -->
@include('components.footer')
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <button type="button" class="close" data-bs-dismiss="modal">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
@include('components.scripts')
