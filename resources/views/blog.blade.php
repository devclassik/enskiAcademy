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
                                                <a href="mailto:support@enski.com.ng"> support@enski.com.ng</a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                             <i class="flaticon-call"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
                                                 +2348162237272
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
                                        <a href="/hompage" class="mobile-logo">
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
                                                <a href="/home-about">About</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/entertainment">Entertainment</a> </li>
                                                    <li><a href="/skills-academy">Skills Academy</a> </li>
                                                    <li><a href="/branding">Branding Agency</a> </li>
                                                    {{--      add a comming soon page @todo--}}
                                                    <li><a href="#">Financial Services</a></li>
                                                    <li><a href="#">Skill Set Connector</a> </li>
                                                    <li><a href="#">Logistics</a> </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Blog</a> </li>
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
            <div class="rs-breadcrumbs img4">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Blog</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="/homepage">Home</a>
                        </li>
                       <li>Blog</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                                <div class="recent-posts mb-50">
                                    <div class="widget-title">
                                        <h3 class="title">Latest Posts</h3>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="/blog-details">Pen Source Job Report Show More Openings Fewer </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                January 21, 2020
                                            </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/2.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="/blog-details">Tech Products That Makes Its Easier to Stay at Home</a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                January 21, 2020
                                            </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/3.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="/blog-details">Necessity May Give Us Your Best Virtual Court System </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                January 21, 2020
                                            </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/4.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="/blog-details">Servo Project Joins The Linux Foundation Fold Desco </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                January 21, 2020
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories mb-50">
                                    <div class="widget-title">
                                        <h3 class="title">Categories</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Application Testing</a></li>
                                        <li><a href="#">Artifical Intelligence</a></li>
                                        <li><a href="#">Digital Technology</a></li>
                                        <li><a href="#">IT Services</a></li>
                                        <li><a href="software-development.html">Software Development</a></li>
                                        <li><a href="web-development.html">Web Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-35 md-pr-15">
                            <div class="row">
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/1.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="/blog-details">Application Testing</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Open Source Job Report Show More Openings Fewer</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/2.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="/blog-details">Application Testing</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/3.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="/blog-details">Application Testing</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Necessity May Give Us Your Best Virtual Court System</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/4.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="blog-single">Application Testing</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/5.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="/blog-details">Software Development</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/6.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="/blog-details">Software Development</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Necessity May Give Us Your Best Virtual Court System</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/7.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="/blog-details">Web Development</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/8.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="/blog-details">It Services</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Open Source Job Report Show More Openings Fewer</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/9.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="blog-single">Artifical Intelligence</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Types of Social Proof What its Makes Them Effective</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="/blog-details"><img src="{{asset('assets/images/blog/inner/10.jpg')}}" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="blog-single">Digital Technology</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="/blog-details">Tech Firms Support Huawei Restriction, Balk at Cost</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                            </div>
                                            <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="/blog-details">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->

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
