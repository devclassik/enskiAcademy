@extends('components.app')

@section('content')
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
                                            <a href="tel:+2348162237272"> +2348162237272</a>
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
                                        <li class="opening"> <em><i class="flaticon-clock"></i> 12:01 PM-6:00 PM</em> </li>
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
                                    <a href="/homepage">
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
                                        <nav class="rs-menu pr-70 lg-pr-50 md-pr-0">
                                            <ul class="nav-menu">
                                                <li class="rs-mega-menu current-menu-item"> <a href="/homepage">Home</a>
                                                </li>
                                                <li>
                                                    <a href="/home-about">About</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="/services">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="/entertainment">Entertainment</a> </li>
                                                        <li><a href="/skills-academy">Skills Academy</a> </li>
                                                        <li><a href="/branding">Branding Agency</a> </li>
{{--                                                        add a comming soon page @todo--}}
                                                        <li><a href="/coming-soon">Financial Services</a></li>
                                                        <li><a href="/coming-soon">Skill Set Connector</a> </li>
                                                        <li><a href="/coming-soon">Logistics</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="/blog">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li> <a href="/blog">Blog Post</a> </li>
                                                    </ul>
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
                    <a href="/homepage"><img src="{{asset('assets/images/logo-dark.png')}}" alt="logo"></a>
                </div>

                <div class="canvas-contact">
                    <h5 class="canvas-contact-title">Contact Info</h5>
                    <ul class="contact">
                        <li><i class="fa fa-globe"></i>Middle Badda, Dhaka, BD</li>
                        <li><i class="fa fa-phone"></i>+234 (0) 8162237272</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:support@enski.com.ng<">support@enski.com.ng<</a></li>
                        <li><i class="fa fa-clock-o"></i>12:01pm-6:00 PM</li>
                    </ul>
                    @include('components.socials')
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </div>
        <!--Full width header End-->

        <!-- Banner Section Start -->

        <div class="rs-banner style2 pt-120 pb-120 md-pt-0 md-pb-0">
            @if (Session::has('Success'))

                <div class="alert alert-success">{{ Session::get('Success') }}</div>

            @endif
            <div class="container">
                <div class="banner-content">
                    <div class="sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" style="padding: 10px 10px;">Welcome To
                        <h1 class="title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms" style="font-size: 100px; padding: 20px 20px;"> Enski</h1>
                        <h2 class=" title-small wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms" style="text-transform: lowercase;">
                            your reason to smile today...
                        </h2>
                        <div class="btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon buy-now get-in" href="/my-account">Login | Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
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
                                    <img class="dance" src="{{asset('assets/images/about/effect-1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-60 md-pl-15">
                            <div class="contact-wrap">
                                <div class="sec-title mb-30">
                                    <div class="sub-text style-bg">About Us</div>
                                    <h2 class="title pb-38">
                                        What If The Sky Could Be Your Starting Point?
                                    </h2>
                                    <div class="desc pb-35">
                                        Enski was launched in 2021 as an empowerment platform which provides you solutions and multiple services all aimed at elevating you to skies of brand excellence and personal fulfillment.
                                    </div>
                                    <p class="margin-0 pb-15">
                                        <i>
                                         We specialize in bringing out the BEST in both personal and corporate brands by helping them reach their INFINITE potential because we believe that everyone is a STAR.
                                        </i>
                                    </p>
                                </div>
                                <div class="btn-part">
                                    <a class="readon learn-more" href="/home-about">Learn-More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-image">
                        <img class="top dance" src="{{asset('assets/images/about/dotted-3.png')}}" alt="">
                        <img class="bottom dance" src="{{asset('assets/images/about/shape3.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style2 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Services | Divisions</span>
                        <h2 class="title">
                            Services We Are Offers includes:
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-25">
                            <div class="flip-box-inner">
                                <div class="flip-box-wrap">
                                    <div class="front-part">
                                        <div class="front-content-part">
                                            <div class="front-icon-part">
                                                <div class="icon-part">
                                                    <img src="{{asset('assets/images/services/main-home/icons/1.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="front-title-part">
                                                <h3 class="title"><a href="/entertainment">Entertainment</a></h3>
                                            </div>
                                            <div class="front-desc-part">
                                                <p>
                                                    We make your happiness our priority by connecting you to the most entertaining contents on our entertainment channels.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back-front">
                                        <div class="back-front-content">
                                            <div class="back-title-part">
                                                <h3 class="back-title"><a href="/software-development">Entertainment</a></h3>
                                            </div>
                                            <div class="back-desc-part">
                                                <p class="back-desc">
                                                    We make your happiness our priority by connecting you to the most entertaining contents on our entertainment channels.
                                                </p>
                                            </div>
                                            <div class="back-btn-part">
                                                <a class="readon view-more" href="/entertainment">Get Connected</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-25">
                            <div class="flip-box-inner">
                                <div class="flip-box-wrap">
                                    <div class="front-part">
                                        <div class="front-content-part">
                                            <div class="front-icon-part">
                                                <div class="icon-part">
                                                    <img src="{{asset('assets/images/services/main-home/icons/2.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="front-title-part">
                                                <h3 class="title"><a href="/skills-academy"> Skills Academy</a></h3>
                                            </div>
                                            <div class="front-desc-part">
                                                <p>
                                                    Learn high in-demand/ income skills from leading field experts that will help you take your earning power to the next level.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back-front">
                                        <div class="back-front-content">
                                            <div class="back-title-part">
                                                <h3 class="back-title"><a href="/skills-academy"> Skills Academy</a></h3>
                                            </div>
                                            <div class="back-desc-part">
                                                <p class="back-desc">Learn high in-demand/ income skills from leading field experts that will help you take your earning power to the next level.</p>
                                            </div>
                                            <div class="back-btn-part">
                                                <a class="readon view-more" href="/skills-academy">Start Learning</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-25">
                            <div class="flip-box-inner">
                                <div class="flip-box-wrap">
                                    <div class="front-part">
                                        <div class="front-content-part">
                                            <div class="front-icon-part">
                                                <div class="icon-part">
                                                    <img src="{{asset('assets/images/services/main-home/icons/3.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="front-title-part">
                                                <h3 class="title"><a href="/branding">Branding Agency</a></h3>
                                            </div>
                                            <div class="front-desc-part">
                                                <p>
                                                    We build and polish your brand, product, idea or even startup to a level of excellence helping it standout in our noisy world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back-front">
                                        <div class="back-front-content">
                                            <div class="back-title-part">
                                                <h3 class="back-title"><a href="/branding">Branding Agency</a></h3>
                                            </div>
                                            <div class="back-desc-part">
                                                <p class="back-desc">We build and polish your brand, product, idea or even startup to a level of excellence helping it standout in our noisy world.</p>
                                            </div>
                                            <div class="back-btn-part">
                                                <a class="readon view-more" href="/branding">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-25">
                            <div class="flip-box-inner">
                                <div class="flip-box-wrap">
                                    <div class="front-part">
                                        <div class="front-content-part">
                                            <div class="front-icon-part">
                                                <div class="icon-part">
                                                    <img src="{{asset('assets/images/services/main-home/icons/4.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="front-title-part">
                                                <h3 class="title"><a href="/coming-soon">Financial Services</a></h3>
                                            </div>
                                            <div class="front-desc-part">
                                                <p>
                                                    Get covered financially as a student or startup/ small business owner with our targeted savings/ loans initiative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back-front">
                                        <div class="back-front-content">
                                            <div class="back-title-part">
                                                <h3 class="back-title"><a href="/coming-soon">Financial Services</a></h3>
                                            </div>
                                            <div class="back-desc-part">
                                                <p class="back-desc">Get covered financially as a student or startup/ small business owner with our targeted savings/ loans initiative.</p>
                                            </div>
                                            <div class="back-btn-part">
                                                <a class="readon view-more" href="/coming-soon">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mb-25">
                            <div class="flip-box-inner">
                                <div class="flip-box-wrap">
                                    <div class="front-part">
                                        <div class="front-content-part">
                                            <div class="front-icon-part">
                                                <div class="icon-part">
                                                    <img src="{{asset('assets/images/services/main-home/icons/5.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="front-title-part">
                                                <h3 class="title"><a href="/coming-soon">Skill Set Connector</a></h3>
                                            </div>
                                            <div class="front-desc-part">
                                                <p>
                                                    Hire or Get Hired as you stay connected to a wide range of skills experts,  freelancers, clients, job finders and vacancies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back-front">
                                        <div class="back-front-content">
                                            <div class="back-title-part">
                                                <h3 class="back-title"><a href="/coming-soon">Skill Set Connector</a></h3>
                                            </div>
                                            <div class="back-desc-part">
                                                <p class="back-desc">Hire or Get Hired as you stay connected to a wide range of skills experts,  freelancers, clients, job finders and vacancies.</p>
                                            </div>
                                            <div class="back-btn-part">
                                                <a class="readon view-more" href="/coming-soon">Hire | Get Hired</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="flip-box-inner">
                                <div class="flip-box-wrap">
                                    <div class="front-part">
                                        <div class="front-content-part">
                                            <div class="front-icon-part">
                                                <div class="icon-part">
                                                    <img src="{{asset('assets/images/services/main-home/icons/6.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="front-title-part">
                                                <h3 class="title"><a href="/coming-soon">Logistics</a></h3>
                                            </div>
                                            <div class="front-desc-part">
                                                <p>
                                                    We make sure your goods are transported and delivered in their respective locations at the shortest timeframes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back-front">
                                        <div class="back-front-content">
                                            <div class="back-title-part">
                                                <h3 class="back-title"><a href="/coming-soon">Logistics</a></h3>
                                            </div>
                                            <div class="back-desc-part">
                                                <p class="back-desc">We make sure your goods are transported and delivered in their respective locations at the shortest time frames.</p>
                                            </div>
                                            <div class="back-btn-part">
                                                <a class="readon view-more" href="/coming-soon">Transport</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-animation">
                    <div class="shape-part">
                        <img class="dance" src="{{asset('assets/images/services/s2.png')}}" alt="images">
                    </div>
                </div>
            </div>


            <!-- Process Section Start -->
            <div class="rs-process style2 pt-120 pb-120 md-pt-80 md-pb-73">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Entertainment</span>
                        <h4>
                            Join our social media entertainment channels to stay connected to our fun, creative and informative contents.
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 md-mb-50">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img geeks">
                                        <img src="{{asset('assets/images/process/1.png')}}" alt="" style="border-radius: 30px;
                                        width: 70%; margin-left: 50px;">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title"><a href="https://wa.me/message/KUOMF26QJ33GK1">WhatsApp</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 md-mb-50">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img geeks">
                                        <img src="{{asset('assets/images/process/2.png')}}" alt="" style="border-radius: 30px;
                                        width: 70%; margin-left: 50px;">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title"><a href="https://fb.me/enski.impact.summit"> Facebook</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img geeks">
                                        <img src="{{asset('assets/images/process/3.png')}}" alt="" style="border-radius: 30px;
                                        width: 70%; margin-left: 50px;">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title"><a href="https://www.instagram.com/enski_impact_summit"> Instagram</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img geeks">
                                        <img src="{{asset('assets/images/process/4.png')}}" alt="" style="border-radius: 30px;
                                        width: 70%; margin-left: 50px;">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title"><a href="https://t.me/enski_entertainment"> Telegram</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Section End -->

            <!-- Pricing section start -->
            <div class="rs-pricing style2 gray-color pt-120 pb-143 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Skills Academy</span>
                        <h4>
                            Grab one of our trending courses and start exploring more earning opportunities.
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    Premium
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/1.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">&#x20A6;</span>
                                        <span class="table-price-text">25,000</span>
                                        <span class="table-period">CRYPTO TRADING</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Introduction to Crypto</span></li>
                                        <li><i class="fa fa-check"></i><span>Spot Trading</span></li>
                                        <li><i class="fa fa-check"></i><span>Futures and Derivatives</span></li>
                                        <li><i class="fa fa-check"></i><span>Basic Technical Analysis</span></li>
                                        <li><i class="fa fa-check"></i><span>Trading Indicators</span></li>
                                        <li><i class="fa fa-check"></i><span>Creating Successful Trading Setups</span></li>
                                    </ul>

                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="/shop">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table primary-bg">
                                <div class="pricing-badge white-color-bg">
                                    Premium
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/2.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">&#x20A6;</span>
                                        <span class="table-price-text">25,000</span>
                                        <span class="table-period">GRAPHIC DESIGNING</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>The Psychology of design</span></li>
                                        <li><i class="fa fa-check"></i><span>Application of Design Principles</span></li>
                                        <li><i class="fa fa-check"></i><span>Colour Theory</span></li>
                                        <li><i class="fa fa-check"></i><span>Flyer | Book cover Design</span></li>
                                        <li><i class="fa fa-check"></i><span>Branding</span></li>
                                        <li><i class="fa fa-check"></i><span>Building a business around your design Skills</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="/shop">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    ELITE
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/3.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">&#x20A6;</span>
                                        <span class="table-price-text">5,000</span>
                                        <span class="table-period">MINI-IMPORTATION</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="/shop">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing section end -->

            <!-- Project Section Start -->
            <div class="rs-project bg6 style2 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg white-color">Projects</span>
                        <h2 class="title title2 white-color">
                            Our Recent Branding Projects
                        </h2>
                        <h6>Take a peak at some of our recent Branding or Design Projects.</h6>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#"><img src="{{asset('assets/images/project/main-home/1.jpg')}}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a href="case-studies-style1.html">Product Design</a></h3>
                                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#"><img src="{{asset('assets/images/project/main-home/2.jpg')}}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a href="/case-studies-style1">Growth Strategies</a></h3>
                                        <span class="category"><a href="/case-studies-style1">IT Technology</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#"><img src="{{asset('assets/images/project/main-home/3.jpg')}}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a href="/case-studies-style1">latform Integration</a></h3>
                                        <span class="category"><a href="/case-studies-style1">IT Technology</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#"><img src="{{asset('assets/images/project/main-home/4.jpg')}}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a href="/case-studies-style1">Innovative Interfaces</a></h3>
                                        <span class="category"><a href="/case-studies-style1">IT Technology</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#"><img src="{{asset('assets/images/project/main-home/5.jpg')}}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a href="/case-studies-style1">Product Engineering</a></h3>
                                        <span class="category"><a href="/case-studies-style1">IT Technology</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="#"><img src="{{asset('assets/images/project/main-home/6.jpg')}}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a href="/case-studies-style1">Analytic Solutions</a></h3>
                                        <span class="category"><a href="/case-studies-style1">IT Technology</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Section End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style3 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Testimonial</span>
                        <h2 class="title title2">
                            What Saying Our Customers
                        </h2>
                    </div>
                    <div class="rs-carousel owl-carousel"
                         data-loop="true"
                         data-items="3"
                         data-margin="30"
                         data-autoplay="true"
                         data-hoverpause="true"
                         data-autoplay-timeout="5000"
                         data-smart-speed="800"
                         data-dots="true"
                         data-nav="false"
                         data-nav-speed="false"

                         data-md-device="3"
                         data-md-device-nav="false"
                         data-md-device-dots="true"
                         data-center-mode="false"

                         data-ipad-device2="1"
                         data-ipad-device-nav2="false"
                         data-ipad-device-dots2="true"

                         data-ipad-device="2"
                         data-ipad-device-nav="false"
                         data-ipad-device-dots="true"

                         data-mobile-device="1"
                         data-mobile-device-nav="false"
                         data-mobile-device-dots="false">
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                            </div>
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/1.jpg')}}" alt="">
                                </div>
                                <a class="name" href="#">Mariya Khan</a>
                                <span class="designation">CEO, Brick Consulting</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                            </div>
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/2.jpg')}}" alt="">
                                </div>
                                <a class="name" href="#">Felando</a>
                                <span class="designation">CEO & founder</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                            </div>
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/3.jpg')}}" alt="">
                                </div>
                                <a class="name" href="#">Abdul Haque</a>
                                <span class="designation">Area Manager</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{asset('assets/images/testimonial/main-home/quote-white.png')}}" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                            </div>
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/4.jpg')}}" alt="">
                                </div>
                                <a class="name" href="#">Sadek Tal</a>
                                <span class="designation">Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Counter Section Start -->
            <div class="rs-counter style2 bg5 pt-100 pb-200 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="counter-top-area">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 md-mb-40">
                                <div class="counter-list md-center">
                                    <div class="count-icon">
                                        <img src="{{asset('assets/images/counter/1.png')}}" alt="">
                                    </div>
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count k">100</span>
                                        </div>
                                        <h3 class="title">Happy Clients</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 md-mb-40">
                                <div class="counter-list md-center">
                                    <div class="count-icon">
                                        <img src="{{asset('assets/images/counter/2.png')}}" alt="">
                                    </div>
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus">15</span>
                                        </div>
                                        <h3 class="title">Months Experience</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 xs-mb-40">
                                <div class="counter-list md-center">
                                    <div class="count-icon">
                                        <img src="{{asset('assets/images/counter/3.png')}}" alt="">
                                    </div>
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus">3</span>
                                        </div>
                                        <h3 class="title">Services</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="counter-list md-center">
                                    <div class="count-icon">
                                        <img src="{{asset('assets/images/counter/4.png')}}" alt="">
                                    </div>
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus">25</span>
                                        </div>
                                        <h3 class="title">Teams Members</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->

            <!-- Video Section End -->
            <div class="rs-video-wrap md-pt-80">
                <div class="container">
                    <div class="row margin-0">
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
                                <div class="sec-title2 mb-33">
                                    <span class="sub-text style-bg">Consultation</span>
                                    <h2 class="title testi-title">
                                        Request For Consultation
                                    </h2>
                                    <h5> Business | Branding | Financial </h5>
                                </div>
                                <div id="form-messages"></div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ route ('contactUs')}}" >
                                    @csrf
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" name="name" placeholder="Name" required="">
                                            </div>
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                                <input class="from-control" type="text"  name="email" placeholder="E-Mail" required="">
                                            </div>
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" name="tel" placeholder="Phone Number" required="">
                                            </div>
                                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
{{--                                                <input class="from-control" type="text" id="website" name="website" placeholder="Consultation Type" required="">--}}
                                                <select class="col-lg-12 dropdown-menu-lg-start" name="type" required>
                                                    <option value="">--constation Type--</option>
                                                    <option value="Entertainment"> Entertainment</option>
                                                    <option value="Skills-Academy">Skills Academy </option>
                                                    <option value="Branding-Agency">Branding Agency </option>
                                                    <option value="Financial-Services">Financial Services </option>
                                                    <option value="Skill-Set-Connector">Skill Set Connector </option>
                                                    <option value="Logistics">Logistics </option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12 mb-35">
                                                <textarea class="from-control" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <button class="submit" type="submit">Submit Now</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Section End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog pt-108 pb-120 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Events</span>
                        <h2 class="title testi-title">
                            Learn About Our Recent Camp
                        </h2>
                        <div class="heading-line">

                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="/blog-details"><img src="{{asset('assets/images/blog/main-home/1.jpg')}}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="/blog-details">Software Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li class="date"><i class="fa fa-calendar-check-o"></i> 16 Nov 2020</li>
                                    <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                                </ul>
                                <h3 class="blog-title"><a href="/blog-details">Necessity May Give Us Your Best Virtual Court System</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                                <div class="blog-button"><a href="/blog-details">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="/blog-details"><img src="{{asset('assets/images/blog/main-home/2.jpg')}}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="/blog-details"> Web Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li class="date"><i class="fa fa-calendar-check-o"></i> 20 December 2020</li>
                                    <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                                </ul>
                                <h3 class="blog-title"><a href="/blog-details">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                                <div class="blog-button"><a href="/blog-details">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="/blog-details"><img src="{{asset('assets/images/blog/main-home/3.jpg')}}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="/blog-details">It Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li class="date"><i class="fa fa-calendar-check-o"></i> 22 December 2020</li>
                                    <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                                </ul>
                                <h3 class="blog-title"><a href="/blog-details">Open Source Job Report Show More Openings Fewer</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                                <div class="blog-button"><a href="/blog-details">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="/blog-details"><img src="{{asset('assets/images/blog/main-home/4.jpg')}}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="/blog-details">Artifical Intelligence</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li class="date"><i class="fa fa-calendar-check-o"></i> 26 December 2020</li>
                                    <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                                </ul>
                                <h3 class="blog-title"><a href="/blog-details">Types of Social Proof What its Makes Them Effective</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                                <div class="blog-button"><a href="/blog-details">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="/blog-details"><img src="{{asset('assets/images/blog/main-home/5.jpg')}}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="/blog-details">Digital Technology</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li class="date"><i class="fa fa-calendar-check-o"></i> 28 December 2020</li>
                                    <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                                </ul>
                                <h3 class="blog-title"><a href="/blog-details">Tech Firms Support Huawei Restriction, Balk at Cost</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                                <div class="blog-button"><a href="/blog-details">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="/blog-details"><img src="{{asset('assets/images/blog/main-home/6.jpg')}}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="/blog-details">It Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li class="date"><i class="fa fa-calendar-check-o"></i> 30 December 2020</li>
                                    <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                                </ul>
                                <h3 class="blog-title"><a href="/blog-details">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                                <div class="blog-button"><a href="/blog-details">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->

            <!-- Cta section start -->
            <div class="rs-cta style1 bg7 pt-70 pb-70">
                <div class="container">
                    <div class="cta-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">
                                <div class="title-wrap">
                                    <h2 class="epx-title">Interested in a community that will help you reach your financial potential?.</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 text-righ">
                                <div class="button-wrapt md-center">
                                    <a class="readon learn-more" href="/contact">Get In Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta section end -->

        </div>
        <!-- Main content End -->
    @endsection
