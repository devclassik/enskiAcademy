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
                                                <span>Address</span>
                                                Abuja-Keffi Rd, Nassarawa
                                            </span>
                                        </li>
                                        <li class="contact-part">
                                            <i class="flaticon-email"></i>
                                            <span class="contact-info">
                                                <span>E-mail</span>
                                                <a href="mailto:support@enski.com.ng">support@enski.com.ng</a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                             <i class="flaticon-call"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
                                                <a href="tel:+234(0)8162237272"> +234 (0) 8162237272</a>
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
                                            <li class="rs-mega-menu ">
                                                <a href="/homepage">Home</a>
                                            </li>
                                            <li>
                                                <a href="/home-about">About</a>
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
            <div class="rs-breadcrumbs img3">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">My Account</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="/homepage">Home</a>
                        </li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- My Account Section Start -->
            <div class="rs-my-account pt-110 pb-120 md-pt-60 md-pb-80">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-6 md-mb-50">
                            <h2 class="title pb-30 md-pb-15">Login</h2>
                           <div class="rs-login">
                               <div class="form-group mb-30">
                                   <label>Username or email address<span>*</span></label>
                                   <input id="fname" name="fname" class="form-control-mod" type="text" required="">
                                   <label>Password <span>*</span></label>
                                   <input id="tname" name="text" class="form-control-mod" type="text" required="">
                               </div>
                               <button class="add-btn" type="submit">Log In</button>
                                <label>
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                    <span>Remember me</span>
                                </label>
                               <div class="last-password pt-30">
                                    <a href="#">Lost your password?</a>
                                </div>
                           </div>
                       </div>
                       <div class="col-lg-6">
                            <h2 class="title pb-30 md-pb-15">Register</h2>
                            <div class="rs-login">
                                <div class="form-group">
                                    <label>Email address<span>*</span></label>
                                    <input id="gname" name="type" class="form-control-mod" type="text" required="">
                                </div>
                                <p>A password will be sent to your email address.</p>
                                <p>
                                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy.</a>
                                </p>
                                <button class="add-btn" type="submit">Register</button>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section Start -->


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
