    @include('components.header')
    <!--Preloader area End here-->

		<!-- Main content Start -->
        <div class="main-content">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header style2 btn-style">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area style2">
                       <div class="container">
                           <div class="row y-middle">
                               <div class="col-lg-8">
                                   <ul class="topbar-contact">
                                       <li>
                                           <i class="flaticon-email"></i>
                                           <a href="mailto:contact@enski.net">contact@enski.net</a>
                                       </li>
                                       <li>
                                           <i class="flaticon-call"></i>
                                           <a href="tel:+234(0)8162237272"> +2348162237272</a>
                                       </li>
                                       <li>
                                           <i class="flaticon-location"></i>
                                           Abuja-Keffi Rd, Nassarawa
                                       </li>
                                   </ul>
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
                                        <a href="/homepage"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu pr-90 md-pr-0">
                                               <ul class="nav-menu">
                                                    <li> <a href="/homepage">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="/home-about">About</a>
                                                    </li>
                                                    <li class="menu-item-has-children rs-mega-menu current-menu-item">
                                                        <a href="#">Services</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/entertainment">Entertainment</a> </li>
                                                            <li><a href="/skills-academy">Skills Academy</a> </li>
                                                            <li><a href="/branding">Branding Agency</a> </li>
                                                            <li><a href="/coming-soon">Financial Services</a></li>
                                                            <li><a href="/coming-soon">Skill Set Connector</a> </li>
                                                            <li><a href="/coming-soon">Logistics</a> </li>
                                                        </ul>
                                                    </li>
                                                   <li>
                                                       <a href="/blog">Blog</a>
                                                    </li>
                                                    <li>
                                                       <a href="/contact">Contact</a>
                                                    </li>
                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                        <div class="expand-btn-inner search-icon hidden-md">
                                            <ul>
                                                <li class="sidebarmenu-search">
                                                    <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                                @if (!Auth::guest())
                                                    <li><a class="quote-btn" href="/dologout">Logout</a></li>

                                                @else
                                                    <li><a class="quote-btn" href="/my-account">Login/ Register</a></li>

                                                @endif
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
                        <a href="index.html"><img src="{{asset('assets/images/logo-dark.png')}}" alt="logo"></a>
                    </div>
                    <div class="canvas-contact">
                        <h5 class="canvas-contact-title">Contact Info</h5>
                        <ul class="contact">
                            <li><i class="fa fa-globe"></i> Abuja-Keffi Rd, Nassarawa</li>
                            <li><i class="fa fa-phone"></i>+234 8162237272</li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:contact@enski.net">contact@enski.net</a></li>
                            <li><i class="fa fa-clock-o"></i>12:00 PM - 6:00 PM</li>
                        </ul>
                        <ul class="social">
                            <li><a href="https://www.twitter.com/enski_official"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://fb.me/enski.impact.summit"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/enski-integrated-services/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/enski_official/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </div>
            <!--Full width header End-->
            @if (Session::has('success'))

                <div class="alert alert-success">

                    {{ Session::get('success') }}</div>

             @endif
            <!-- Banner Section Start -->
            <div class="rs-banner style4">
                <div class="container">
                    <div class="banner-content">
                        <span class="sub-title">Skiils Academy </span>
                       <h1 class="title">Expand your financial potential</h1>
                        <p class="desc">
                            Gain access to top-level strategies and high income skills from leading field experts and professionals.
                        </p>
                        <ul class="banner-btn">
                            <li><a class="readon discover" href="/dashboard">Access Student Dashboard</a></li>
                            <li>
                                <div class="rs-videos">
                                    <div class="animate-border white-color">
                                        <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div class="rs-about style3 pt-120 pb-120 md-pt-75 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-title2 mb-30">
                                <div class="sub-text">Our Academy</div>
                                <h2 class=" title title3 pb-20">
                                    What you should know about our Academy
                                </h2>
                                <div class="desc desc2">
                                    Enski Skills Academy is a world class eLearning platform that gives you direct access to wealth and financial freedom with premium courses that teaches first class high income skills from fully verified professionals and field experts while also guiding you on strategies for wealth creation and sustainance.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 md-pt-40">
                            <div class="rs-animation-image">
                                <div class="pattern-img">
                                   <img src="{{asset('assets/images/about/style2/round.png')}}" alt="">
                                </div>
                                <div class="middle-img">
                                   <img class="dance3" src="{{asset('assets/images/about/style2/about1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

             <!-- Process Section Start -->
            <div class="rs-process style3 gray-color pt-120 pb-120 md-pt-75 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="process-wrap bg9">
                                <div class="sec-title mb-30">
                                    <div class="sub-text new">How We Work</div>
                                    <h2 class="title title4 white-color pb-20">
                                        How Our Skills Academy Helps You Achieve Financial Freedom
                                    </h2>
                                    <div class="desc white-color">
                                        We are not just all words when it comes to your financial freedom as we are built on tested strategies and actionable milestones all aimed at our common goal of your financial freedom.
                                    </div>
                                    <div class="btn-part mt-40">
                                        <a class="readon discover started" href="/dashboard">Start Journey</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 pl-35 md-pt-40 md-pl-15">
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                01
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Consultation</h3>
                                            </div>
                                            <p class="number-txt">One-On-One consultation session with our professionals to guide you on the best skills that suit your personality and financial potential.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                02
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Learning</h3>
                                            </div>
                                            <p class="number-txt">Provision of premium learning resources in the skills of interest as well as tailored learning plans to keep you accountable.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 md-mb-20">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                03
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Safe Practice Environment</h3>
                                            </div>
                                            <p class="number-txt">Provision of a safe environment to practice and execute all you learn with a live mentor on stand-by to build on your trials till you become financially successful.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                04
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Financial Education</h3>
                                            </div>
                                            <p class="number-txt">Full membership access to our VIP financial community, mentorship and resource materials to help you understand the psychology behind wealth creation and sustainability.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br><br>
            <!-- Process Section End -->

            <!-- Progress Section Start -->
            <div class="progress-pie-part pb-110 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 md-pb-40">
                           <div class="box">
                               <div class="chart" data-percent="92%" data-scale-color="#ffb400"><span>92%</span></div>
                               <h2 class="title">Satisfaction Rate</h2>
                           </div>
                        </div>
                        <div class="col-lg-3 md-pb-40">
                           <div class="box">
                               <div class="chart" data-percent="100" data-scale-color="#ffb400"><span>100+</span></div>
                               <h2 class="title">Enrolled Students</h2>
                           </div>
                        </div>
                        <div class="col-lg-3 md-pb-40">
                           <div class="box">
                               <div class="chart" data-percent="100" data-scale-color="#ffb400"><span>9+</span></div>
                               <h2 class="title">Courses</h2>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="box">
                               <div class="chart" data-percent="100" data-scale-color="#ffb400"><span>12+</span></div>
                               <h2 class="title">Facilitators</h2>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style4 modify1 gray-color pt-110 pb-120 md-pt-75 md-pb-40 sm-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Our Trending Courses</span>
                        <h2 class="title">For Your Financial Freedom, Use Our Online Courses
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-20">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/1.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="/graphics-courses">Gaphics Design Course</a></h2>
                                    <p class="desc">
                                        Learn how to creatively use and manipulate visual tools to become a highly skilled and sought-after graphic designer.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="/graphics-courses">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-20">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/2.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Crypto Trading Course</a></h2>
                                    <p class="desc">
                                        Learn and understand the crypto market and all the strategies involved in staying profitable in the crypto market.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-20">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/3.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Affiliate Marketing Course</a></h2>
                                    <p class="desc">
                                        Learn practical strategies on how to generate income via affiliate marketing from the comfort of home.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-20">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/4.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Binary Trading Course</a></h2>
                                    <p class="desc">
                                        Learn everything you need to know about the Binary Market and how to become/ remain a profitable Binary trader.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-20">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/5.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Mini Importation Course</a></h2>
                                    <p class="desc">
                                        Learn from the step by step blueprint of how to build a successful income stream importing products around the world.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-20">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/6.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Forex Trading Course</a></h2>
                                    <p class="desc">
                                        Learn everything about the Forex Financial market and the strategies involved to build a financially stable porfolio.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/7.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Whatsapp Marketisation Course</a></h2>
                                    <p class="desc">
                                        Learn how to marketise your whatsapp and convert it to an income stream using time proven strategies and secrets.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="services-item">--}}
{{--                                <div class="services-icon">--}}
{{--                                    <img src="{{asset('assets/images/services/style5/8.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="services-content">--}}
{{--                                    <h2 class="title"><a href="#">Web Development Course</a></h2>--}}
{{--                                    <p class="desc">--}}
{{--                                        Learn various coding languages and web development techniques to be able to build professional websites.--}}
{{--                                    </p>--}}
{{--                                    <div class="services-btn2">--}}
{{--                                        <a href="#">Learn More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="services-item">--}}
{{--                                <div class="services-icon">--}}
{{--                                    <img src="{{asset('assets/images/services/style5/9.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="services-content">--}}
{{--                                    <h2 class="title"><a href="#">Video Ads Creation Course</a></h2>--}}
{{--                                    <p class="desc">--}}
{{--                                        Learn how to creatively use and manipulate visual tools to create professional video ads for companies, brands, events, etc.--}}
{{--                                    </p>--}}
{{--                                    <div class="services-btn2">--}}
{{--                                        <a href="#">Learn More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/10.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Information Marketing </a></h2>
                                    <p class="desc">
                                        Learn step by step strategies that will help you write powerful sale copies and become a highly paid copywriter.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="services-item">--}}
{{--                                <div class="services-icon">--}}
{{--                                    <img src="{{asset('assets/images/services/style5/10.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="services-content">--}}
{{--                                    <h2 class="title"><a href="#">Amazon KDP</a></h2>--}}
{{--                                    <p class="desc">--}}
{{--                                        Learn step by step strategies that will help you write powerful sale copies and become a highly paid copywriter.--}}
{{--                                    </p>--}}
{{--                                    <div class="services-btn2">--}}
{{--                                        <a href="#">Learn More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style5/10.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="#">Copywriting Course</a></h2>
                                    <p class="desc">
                                        Learn step by step strategies that will help you write powerful sale copies and become a highly paid copywriter.
                                    </p>
                                    <div class="services-btn2">
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- Call Action Section Start -->
            <div class="rs-call-action bg8 pt-120 pb-120 md-pt-75 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center">
                        <span class="sub-text white-color">Free Consultation</span>
                        <h2 class="title title4 white-color">
                           Confused On Which Skill to Learn ?
                        </h2>
                        <div class="call-btn mt-30">
                            <a class="readon discover started" href="https://bit.ly/enski_sa_consultation">Talk to our Skills Consultation experts</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call Action Section End -->


            <!-- Case Study Section Start -->
            <div class="rs-case-study primary-background">
                <div class="row margin-0 align-items-center">
                    <div class="col-lg-4 padding-0">
                        <div class="case-study bg12 mod">
                            <div class="sec-title2 mb-30">
                                <div class="sub-text white-color">Financial Freedom For Everyone</div>
                                <h2 class="title testi-title white-color pb-20">
                                    The more you LEARN... The more you EARN
                                </h2>
                                <div class="desc-big">
                                   Start exploring greater earning opportunities today by choosing from our variety of high income skill courses and learn at a go without limits at your own pace, anytime and anywhere.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 padding-0">
                        <div class="case-study-wrap">
                            <!-- Project Section Start -->
                            <div class="rs-project style3 modify1 mod md-pt-0">
                                <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="{{asset('assets/images/project/skills-flyer/1.jpg')}}" alt="images"></a>
                                        </div>
                                        <div class="project-content">
                                            <div class="portfolio-inner">
                                                <h3 class="title"><a href="#">Graphics Design</a></h3>
                                                <span class="category"><a href="#">Mr. Donald Joel</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="{{asset('assets/images/project/skills-flyer/2.jpg')}}" alt="images"></a>
                                        </div>
                                        <div class="project-content">
                                            <div class="portfolio-inner">
                                                <h3 class="title"><a href="#">Crypto Trading</a></h3>
                                                <span class="category"><a href="#">Dr. Dann O.</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="{{asset('assets/images/project/skills-flyer/3.jpg')}}" alt="images"></a>
                                        </div>
                                        <div class="project-content">
                                            <div class="portfolio-inner">
                                                <h3 class="title"><a href="#">Affiliate Marketing</a></h3>
                                                <span class="category"><a href="#">Mr. Moses</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="{{asset('assets/images/project/skills-flyer/4.jpg')}}" alt="images"></a>
                                        </div>
                                        <div class="project-content">
                                            <div class="portfolio-inner">
                                                <h3 class="title"><a href="#">Forex Trading</a></h3>
                                                <span class="category"><a href="#">Mr. Ekemini</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="{{asset('assets/images/project/skills-flyer/5.jpg')}}" alt="images"></a>
                                        </div>
                                        <div class="project-content">
                                            <div class="portfolio-inner">
                                                <h3 class="title"><a href="#">Mini Importation</a></h3>
                                                <span class="category"><a href="#">Mr. Makuu Joseph</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item">
                                        <div class="project-img">
                                            <a href="#"><img src="{{asset('assets/images/project/skills-flyer/6.jpg')}}" alt="images"></a>
                                        </div>
                                        <div class="project-content">
                                            <div class="portfolio-inner">
                                                <h3 class="title"><a href="#">Binary Trading</a></h3>
                                                <span class="category"><a href="#">Mr. Rohi</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Project Section End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case Study Section Start -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial">
                <div class="container">
                    <div class="testi-effects-layer bg10">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="sec-title mb-60">
                                    <div class="sub-text new">Client's Testimonies</div>
                                    <h2 class="title title4 white-color pb-20">
                                        What Do Our Students Say About Our Academy?
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <!-- Testimonial Section Start -->
                                <div class="rs-testimonial style4">
                                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="20" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                                        <div class="testi-item">
                                            <div class="testi-content">
                                                <div class="images-wrap">
                                                    <img src="{{asset('assets/images/testimonial/main-home/1.jpg')}}" alt="">
                                                </div>
                                                <div class="testi-information">
                                                    <div class="testi-name">Koli Akther</div>
                                                    <span class="testi-title">Graphic Designer</span>
                                                </div>
                                            </div>
                                            <div class="item-content-basic">
                                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote3.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="testi-content">
                                                <div class="images-wrap">
                                                    <img src="{{asset('assets/images/testimonial/main-home/2.jpg')}}" alt="">
                                                </div>
                                                <div class="testi-information">
                                                    <div class="testi-name">Jorina Bibi</div>
                                                    <span class="testi-title">CEO, Brick Consulting</span>
                                                </div>
                                            </div>
                                            <div class="item-content-basic">
                                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote3.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                        </div>
                                         <div class="testi-item">
                                            <div class="testi-content">
                                                <div class="images-wrap">
                                                    <img src="{{asset('assets/images/testimonial/main-home/2.jpg')}}" alt="">
                                                </div>
                                                <div class="testi-information">
                                                    <div class="testi-name">Jorina Bibi</div>
                                                    <span class="testi-title">CEO, Brick Consulting</span>
                                                </div>
                                            </div>
                                            <div class="item-content-basic">
                                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote3.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                        </div>
                                         <div class="testi-item">
                                            <div class="testi-content">
                                                <div class="images-wrap">
                                                    <img src="{{asset('assets/images/testimonial/main-home/2.jpg')}}" alt="">
                                                </div>
                                                <div class="testi-information">
                                                    <div class="testi-name">Jorina Bibi</div>
                                                    <span class="testi-title">CEO, Brick Consulting</span>
                                                </div>
                                            </div>
                                            <div class="item-content-basic">
                                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote3.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="testi-content">
                                                <div class="images-wrap">
                                                    <img src="assets/images/testimonial/main-home/3.jpg" alt="">
                                                </div>
                                                <div class="testi-information">
                                                    <div class="testi-name">Altafur Hongkon</div>
                                                    <span class="testi-title"> Arist</span>
                                                </div>
                                            </div>
                                            <div class="item-content-basic">
                                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote3.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="testi-content">
                                                <div class="images-wrap">
                                                    <img src="assets/images/testimonial/main-home/4.jpg" alt="">
                                                </div>
                                                <div class="testi-information">
                                                    <div class="testi-name">Alamgir Hossen</div>
                                                    <span class="testi-title">Web Developer</span>
                                                </div>
                                            </div>
                                            <div class="item-content-basic">
                                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote3.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Section End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Services Section Start -->
            <div id="rs-services" class="rs-services style6 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class=" sec-title mb-30">
                            <center>
                             <h2 class="title">Why Learn with us</h2>
                             </center>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style4/1.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title"><a href="#">Low Cost</a></h3>
                                    </div>
                                    <p class="services-txt">You get access to the most premium resources from leading experts at the lowest cost possible.</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style4/2.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title"><a href="#">Authenticity</a></h3>
                                    </div>
                                    <p class="services-txt">Our tutors are carefully selected from leading experts in their field and their course contents carefully validated before certification.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style4/3.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title"><a href="#"> Easy Accessibility</a></h3>
                                    </div>
                                    <p class="services-txt">Direct access to the tutors in case of questions, complaints, reviews and suggestions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style4/3.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title"><a href="#">High Accountability</a></h3>
                                    </div>
                                    <p class="services-txt">Full mentorship and guidance along the journey until you get successful as well as extra financial education to help you set the right financial foundation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style4/2.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title"><a href="#">High Accountability</a></h3>
                                    </div>
                                    <p class="services-txt">Full mentorship and guidance along the journey until you get successful as well as extra financial education to help you set the right financial foundation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{asset('assets/images/services/style4/1.png')}}" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title"><a href="#">High Accountability</a></h3>
                                    </div>
                                    <p class="services-txt">Full mentorship and guidance along the journey until you get successful as well as extra financial education to help you set the right financial foundation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

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

