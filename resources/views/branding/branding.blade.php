@include('components.header')
<!--Preloader area End here-->

		<!-- Main content Start -->
        <div class="main-content">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header style3 modify3 header-transparent">
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row-table">
                                <div class="cell-col">
                                    <div class="logo-part">
                                        <a href="index.html">
                                            <img class="normal-logo" src="assets/images/logo-light.png" alt="logo">
                                            <img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
                                        </a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="cell-col">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu">
                                               <ul class="nav-menu">
                                                    <li class="rs-mega-menu current-menu-item"> 
                                                        <a href="/homepage">Home</a><!-- //.mega-menu -->
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
                                </div>
                                <div class="cell-col">
                                    <div class="expand-btn-inner search-icon hidden-md">
                                        <ul>
                                            <li class="sidebarmenu-search">
                                                <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="nav-expander" class="humburger nav-expander" href="#">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </a>
                                            </li>
                                        </ul>
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
                    <div class="close-btn">
                        <div class="nav-link">
                            <a id="nav-close" class="humburger nav-expander" href="#">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                                <span class="dot5"></span>
                                <span class="dot6"></span>
                                <span class="dot7"></span>
                                <span class="dot8"></span>
                                <span class="dot9"></span>
                            </a>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="{{asset('assets/images/logo-dark.png')}}" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>Enski is a one-stop empowerment platform that offers multiple services that will help you, your business or brand reach its infinite potential.</p>
                    </div>
                    <div class="canvas-contact">
                          <div class="address-area">
                              <div class="address-list">
                                  <div class="info-icon">
                                      <i class="flaticon-location"></i>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Address</h4>
                                      <em>Auta-Balefi, Abuja-Keffi Rd, New karu, Nassarawa State</em>
                                  </div>
                              </div>
                              <div class="address-list">
                                  <div class="info-icon">
                                      <i class="flaticon-email"></i>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Email</h4>
                                      <em><a href="mailto:support@enski.com.ng">support@enski.com.ng</a></em>
                                  </div>
                              </div>
                              <div class="address-list">
                                  <div class="info-icon">
                                      <i class="flaticon-call"></i>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Phone</h4>
                                      <em><a href="tel:(+234)8162237272">(+234)8162237272</a></em>
                                  </div>
                              </div>
                          </div>
                        <ul class="social">
                            <li><a href="https://www.twitter.com/enski_connect"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://fb.me/enski.impact.summit"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/enski-integrated-services/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/enski_impact_summit/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </div>
            <!--Full width header End-->

            <!-- Banner Section Start -->
            <div class="rs-banner style9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span class="sub-text wow fadeinup2">Branding Agency</span>
                                <h1 class="title wow fadeinup">The Unifying Power of Branding</h1>
                                <p class="desc wow fadeinup">
                                    We Are Modern Creative Agency, We Create Your Drem & Creating Consistency in Professional Services Branding
                                </p>
                                <div class="btn-part">
                                    <a class="readon more-about" href="/home-about">More About</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="images-part wow fadeInRight">
                                <img src="{{asset('assets/images/banner/style4/image.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-animation">
                    <div class="bnr-animate one">
                        <img class="rotated-style" src="{{asset('assets/images/banner/style4/circle-1.png')}}" alt="">
                    </div>
                    <div class="bnr-animate two">
                        <img class="vertical" src="{{asset('assets/images/banner/style4/circle-2.png')}}" alt="">
                    </div>
                    <div class="bnr-animate three">
                        <img class="horizontal" src="{{asset('assets/images/banner/style4/circle-3.png')}}" alt="">
                    </div>
                    <div class="bnr-animate four">
                        <img class="vertical" src="{{asset('assets/images/banner/style4/shape-1.png')}}" alt="">
                    </div>
                    <div class="bnr-animate five">
                        <img class="horizontal new-style" src="{{asset('assets/images/banner/style4/shape-2.png')}}" alt="">
                    </div>
                    <div class="bnr-animate six">
                        <img class="horizontal" src="{{asset('assets/images/banner/style4/shape-2.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div class="rs-about style5">
                <div class="about-bg pt-120 pb-120 md-pt-80 md-pb-80">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 md-mb-50">
                                <div class="images-part">
                                    <img src="{{asset('assets/images/about/style3/1.png')}}" alt="About">
                                </div>
                                <div class="about-animate">
                                    <img class="dance" src="{{asset('assets/images/about/style3/2.png')}}" alt="About">
                                </div>
                            </div>
                            <div class="col-lg-6 pl-73 md-pl-15">
                                <div class="sec-title4 mb-45 md-mb-0">
                                    <div class="title-img">
                                        <img src="{{asset('assets/images/bg/sob-bg.png')}}" alt="">
                                    </div>
                                    <span class="sub-title">Our Strategy</span>
                                    <h2 class="title testi-title">We Take your Brand To The Next Level</h2>
                                    <div class="desc-part mb-43">
                                        Perspiciatis unde omnis iste natus error sit voluptatem accus antium dolo remque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem the breakpoint for tablet voluptatem the devices.
                                    </div>
                                    <div class="btn-part">
                                        <a class="readon more-about" href="/home-about">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style8 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-50">
                        <h2 class="title testi-title">
                           Featured Brand Strategies and UX design
                        </h2>
                        <p class="desc desc3">
                            Perspiciatis unde omnis iste natus error sit voluptatem accus antium doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="services-item">
                                <div class="services-img">
                                    <img src="{{asset('assets/images/services/style10/1.png')}}" alt="Services">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title"> Branding</h3>
                                    </div>
                                    <p class="services-txt">  Bring to the table win-win survival strate gies to ensure proactive domi nation end toe forward</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="services-item gray-light-bg">
                                <div class="services-img">
                                    <img src="{{asset('assets/images/services/style10/2.png')}}" alt="Services">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title">Strategy</h3>
                                    </div>
                                    <p class="services-txt">  Bring to the table win-win survival strate gies to ensure proactive domi nation end toe forward</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-item pink-bg">
                                <div class="services-img">
                                    <img src="{{asset('assets/images/services/style10/3.png')}}" alt="Services">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3 class="title">Development</h3>
                                    </div>
                                    <p class="services-txt">  Bring to the table win-win survival strate gies to ensure proactive domi nation end toe forward</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- Services Section Start -->
            <div id="rs-services" class="rs-services style3 modify2 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-50">
                        <h2 class="title testi-title">
                            Creative Branding Strategy Services
                        </h2>
                        <p class="desc desc3">
                            Perspiciatis unde omnis iste natus error sit voluptatem accus antium doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="row">

                        <div class="col-md-6 mb-20">
                           <div class="services-item light-purple-bg">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img class="main-img" src="{{asset('assets/images/services/style2/main-img/5.png')}}" alt="">
                                       <img class="hover-img" src="{{asset('assets/images/services/style2/hover-img/5.png')}}" alt="">
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="title"><a href="#">Advertisments | Promotions</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           We denounce with righteous indignation & dislike men who are so beguiled to righteous demorlized.
                                       </p>
                                   </div>
                               </div>
                           </div>
                        </div>

                        <div class="col-md-6 mb-20">
                           <div class="services-item light-purple-bg">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img class="main-img" src="{{asset('assets/images/services/style2/main-img/6.png')}}" alt="">
                                       <img class="hover-img" src="{{asset('assets/images/services/style2/hover-img/6.png')}}" alt="">
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="title"><a href="#">Financial | Startup Consultation & Planning</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           We denounce with righteous indignation & dislike men who are so beguiled to righteous demorlized.
                                       </p>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-6 mb-20">
                           <div class="services-item light-purple-bg">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img class="main-img" src="{{asset('assets/images/services/style2/main-img/6.png')}}" alt="">
                                       <img class="hover-img" src="{{asset('assets/images/services/style2/hover-img/6.png')}}" alt="">
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="title"><a href="#">Graphics | UI / UX Design</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           We denounce with righteous indignation & dislike men who are so beguiled to righteous demorlized.
                                       </p>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-6 mb-20">
                           <div class="services-item light-purple-bg">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img class="main-img" src="{{asset('assets/images/services/style2/main-img/1.png')}}" alt="">
                                       <img class="hover-img" src="{{asset('assets/images/services/style2/hover-img/1.png')}}" alt="">
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="title"><a href="#">Video Ads Editing</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                            We denounce with righteous indignation & dislike men who are so beguiled to righteous demorlized
                                       </p>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-6 sm-mb-20">
                           <div class="services-item light-purple-bg">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img class="main-img" src="{{asset('assets/images/services/style2/main-img/5.png')}}" alt="">
                                       <img class="hover-img" src="{{asset('assets/images/services/style2/hover-img/5.png')}}" alt="">
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="title"><a href="#">Web Development</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           We denounce with righteous indignation & dislike men who are so beguiled to righteous demorlized
                                       </p>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="services-item light-purple-bg">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img class="main-img" src="{{asset('assets/images/services/style2/main-img/2.png')}}" alt="">
                                       <img class="hover-img" src="{{asset('assets/images/services/style2/hover-img/2.png')}}" alt="">
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="title"><a href="#">Content Creation | CopyWriting</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                            We denounce with righteous indignation & dislike men who are so beguiled to righteous demorlized
                                       </p>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="btn-part wow fadeinup mt-45">
                            <a class="readon more-about wow fadeinup" href="/home-about">View More</a>
                        </div>
                    </div>
                </div>
                <!-- Partner Start -->
                <div class="rs-partner style4 modify1 pt-80 xs-pt-40">
                    <div class="container">
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/1.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/1.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/2.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/2.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/3.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/3.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/4.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/4.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/5.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/5.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/6.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/6.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/7.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/7.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="#">
                                        <img class="hover-logo" src="{{asset('assets/images/partner/style2/8.png')}}" alt="">
                                        <img class="main-logo" src="{{asset('assets/images/partner/style2/8.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Partner End -->
            </div>
            <!-- Services Section End -->

            <!-- Counter Section Start -->
            <div class="rs-counter style3 modify3 pt-90">
                <div class="container">
                    <div class="counter-top-area">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 md-pb-50">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count">2051</span>
                                        </div>
                                        <h3 class="title">Projects</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 md-pb-50">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus">150</span>
                                        </div>
                                        <h3 class="title">Clients</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 xs-pb-50">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus">175</span>
                                        </div>
                                        <h3 class="title">Employees</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus">250</span>
                                        </div>
                                        <h3 class="title">Awards</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->

            <!-- Project Section Start -->
            <div class="rs-project style6 modify3 pt-120 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="sec-title4 mb-45 md-mb-30 md-center">
                                <div class="title-img">
                                    <img src="{{asset('assets/images/bg/sob-bg.png')}}" alt="">
                                </div>
                                <span class="sub-title">Latest Projects</span>
                                <h2 class="title testi-title">Branding Agency Case Studies</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30 md-mb-50 text-right md-center">
                            <div class="btn-part">
                                <a class="readon more-about" href="/home-about">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-40">
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="{{asset('assets/images/project/style6/1.jpg')}}" alt="images"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Creative Painting</a></h3>
                                    <span class="category"><a href="#">Branding Agency</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-40">
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="{{asset('assets/images/project/style6/2.jpg')}}" alt="images"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Event Marketing</a></h3>
                                    <span class="category"><a href="#">Branding Agency</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="{{asset('assets/images/project/style6/3.jpg')}}" alt="images"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">B2B Lead Generation</a></h3>
                                    <span class="category"><a href="#">Branding Agency</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 sm-mt-40">
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="#"><img src="{{asset('assets/images/project/style6/4.jpg')}}" alt="images"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="#">Brand Loyalty Built</a></h3>
                                    <span class="category"><a href="#">Branding Agency</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Section End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style9 gray-bg3 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-50">
                        <h2 class="title testi-title">
                            What Customer Saying
                        </h2>
                        <p class="desc desc3">
                            Perspiciatis unde omnis iste natus error sit voluptatem accus antium doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="testi-item">
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/1.jpg')}}" alt="Images">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Megan Fox</div>
                                    <span class="testi-title">CEO, Brick Consulting</span>
                                    <div class="ratings">
                                        <img src="{{asset('assets/images/testimonial/style2/2.png')}}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/2.jpg')}}" alt="Images">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Brie Larson</div>
                                    <span class="testi-title">Digital Marketer</span>
                                    <div class="ratings">
                                        <img src="{{asset('assets/images/testimonial/style2/2.png')}}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="assets/images/testimonial/main-home/3.jpg" alt="Images">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Sushant Singh</div>
                                    <span class="testi-title">Graphic Designer</span>
                                    <div class="ratings">
                                        <img src="{{asset('assets/images/testimonial/style2/2.png')}}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/4.jpg')}}" alt="Images">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Varun Dhawan</div>
                                    <span class="testi-title">Design Lead</span>
                                    <div class="ratings">
                                        <img src="{{asset('assets/images/testimonial/style2/2.png')}}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/5.jpg')}}" alt="Images">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Shahid Kapoor</div>
                                    <span class="testi-title">Web Developer</span>
                                    <div class="ratings">
                                        <img src="{{asset('assets/images/testimonial/style2/2.png')}}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-content">
                                <div class="images-wrap">
                                    <img src="{{asset('assets/images/testimonial/main-home/1.jpg')}}" alt="Images">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Angelina Jolie</div>
                                    <span class="testi-title">CEO, Brick Consulting</span>
                                    <div class="ratings">
                                        <img src="{{asset('assets/images/testimonial/style2/2.png')}}" alt="Images">
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Call Action Section Start -->
            <div class="rs-call-action bg24 pb-70 pt-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="sec-title3 md-center md-mb-30">
                                <span class="sub-text style2">Let's Chat</span>
                                <h2 class="title title2">Have a Project, Let's Start Today.</h2>
                            </div>
                        </div>
                        <div class="col-lg-5 text-right md-center">
                            <div class="btn-part">
                                <a class="readon more-about" href="/contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call Action Section End -->

        </div>
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style3">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                        <div class="footer-logo mb-30">
                            <a href="/homepage"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="textwidget pb-30"><p>Enski is a one-stop empowerment platform that offers multiple services that will help you, your business or brand reach its infinite potential.</p>
                        </div>
                        <ul class="footer-social md-mb-30">
                            <li>
                                <a href="https://www.twitter.com/enski_connect" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                            </li>
                            <li>
                                <a href="https://fb.me/enski.impact.summit" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/enski-integrated-services/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/enski_impact_summit/" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                        <h3 class="widget-title">Our Services</h3>
                        <ul class="site-map">
                            <li><a href="/entertainment">Entertainment</a> </li>
                            <li><a href="/skills-academy">Skills Academy</a> </li>
                            <li><a href="/branding">Branding Agency</a> </li>
                            {{--    add a coming soon page--}}
                            <li><a href="#">Financial Services</a></li>
                            <li><a href="#">Skill Set Connector</a> </li>
                            <li><a href="#">Logistics</a> </li>
                        </ul>

                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                        <h3 class="widget-title">Contact Info</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">Auta-Balefi, Abuja-Keffi Rd, New karu, Nassarawa State</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="tel:(+234)8162237272">(+234)8162237272</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:support@enski.com.ng">support@enski.com.ng</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-clock-1"></i>
                                <div class="desc">
                                    Opening Hours: 12:01 - 18:00
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <h3 class="widget-title">Newsletter</h3>
                        <p class="widget-desc">Subscribe to our newsletters to stay updated with the latest and most resourceful info to help you or your brand stand out.</p>
                        <p>
                            <input type="email" name="EMAIL" placeholder="Your email address" required="">
                            <em class="paper-plane"><input type="submit" value="Sign up"></em>
                            <i class="flaticon-send"></i>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="/homepage">Home</a></li>
                                <li><a href="/home-about">About</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/shop">Shop</a></li>
                                <li><a href="/faq">FAQs</a></li>
                            </ul>
                        </div>
                    <div class="col-lg-6">
                    <div class="copyright">
                        <p>&copy; 2022 All Rights Reserved. Developed By <a href="#">Classic</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="purple-color">
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

