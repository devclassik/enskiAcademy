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
                                    <a href="mailto:support@enski.com.ng">support@enski.com.ng</a>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <a href="tel:++234 (0) 8162237272"> +234 (0) 8162237272</a>
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
                                            <li class="menu-item-has-children current-menu-item">
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
        <!--Full width header End-->
    </div>
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img2">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Binary Trading</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="/homepage">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="/skills-academy.html">Skills Academy</a>
                </li>
                <li>Binary Trading</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                    <div class="sec-title4">
                        <span class="sub-text">BINARY TRADING COURSE OVERVIEW</span>
                        <h2 class="title">Let's dive into the professional world of Binary Trading</h2>
                        <div class="heading-line"></div>
                        <div class="desc desc-big">
                            We donec pulvinar magna id leoersi pellentesque impered dignissim rhoncus euismod euismod eros vitae best consulting & financial services theme .
                        </div>
                        <div class="desc desc-big">
                            Business ipsum dolor sit amet nsectetur cing elit. Suspe ndisse suscipit sagittis leo sit met entum is not estibulum dignity sim posuere cubilia durae. Leo sit met entum cubilia crae. At vero eos accusamus et iusto odio dignissimos provident nam libero tempore, cum soluta.
                        </div>
                        <div class="btn-part mt-45">
                            <a class="readon learn-more" href="contact.html">Go Pro</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="software-img">
                        <img src="{{asset('assets/images/about/about-us/1.jpg')}}" alt="images">
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section Start -->
        <div class="rs-services style5 pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/style7/1.png" alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="web-development.html">Expert Peoples</a></h3>
                                <p class="services-desc">
                                    At vero eos et accusamus etiusto odio praesentium.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/style7/2.png" alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="web-development.html">First Growing Process</a></h3>
                                <p class="services-desc">
                                    At vero eos et accusamus etiusto odio praesentium.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/style7/2.png" alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="web-development.html">First Growing Process</a></h3>
                                <p class="services-desc">
                                    At vero eos et accusamus etiusto odio praesentium.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/style7/3.png" alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="web-development.html">Creative Ideas</a></h3>
                                <p class="services-desc">
                                    At vero eos et accusamus etiusto odio praesentium.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->
    </div>
    <!-- About Section End -->


    <!-- About Section Start -->
    <div id="rs-about" class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-45 md-pr-15 md-mb-50">
                    <div class="choose-img">
                        <img src="assets/images/choose/3.png" alt="images">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title mb-30">
                        <div class="sub-text choose">What you will learn</div>
                        <ul class="listing-style">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Sed ut perspiciatis unde omnis iste natus error</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                            </li>
                        </ul>
                        <div class="sec-title4">
                            <div class="heading-line"></div>
                        </div>
                        <div class="sub-text choose">Who This Course Is For</div>
                        <ul class="listing-style">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Sed ut perspiciatis unde omnis iste natus error</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                            </li>
                        </ul>
                        <div class="sec-title4">
                            <div class="heading-line"></div>
                        </div>
                        <div class="sub-text choose">Course Requirements</div>
                        <ul class="listing-style">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Sed ut perspiciatis unde omnis iste natus error</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Counter Section Start -->
        <div class="rs-counter style3 modify1 pt-90 pb-80">
            <div class="container">
                <div class="counter-top-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="counter-list">
                                <div class="counter-text">
                                    <div class="count-number">
                                        <span class="rs-count">4</span>
                                    </div>
                                    <h3 class="title">Course Packages</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="counter-list">
                                <div class="counter-text">
                                    <div class="count-number">
                                        <span class="rs-count">20</span>
                                        <span class="prefix">+</span>
                                    </div>
                                    <h3 class="title">Hours Video Lessons</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 sm-mb-30">
                            <div class="counter-list">
                                <div class="counter-text">
                                    <div class="count-number">
                                        <span class="rs-count">4.2</span>
                                        <span class="prefix">/5</span>
                                    </div>
                                    <h3 class="title">Review</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 sm-mb-30">
                            <div class="counter-list">
                                <div class="counter-text">
                                    <div class="count-number">
                                        <span class="rs-count">50</span>
                                        <span class="prefix">+</span>
                                    </div>
                                    <h3 class="title">Enrolled Students</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->

        <!-- Course Outline Section Start -->
        <div id="rs-faq" class="rs-faq gray-color pt-120  md-pt-90 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-15">
                        <div class="sec-title2 mb-45">
                            <span class="sub-text style-bg">CURRICULUM</span>
                            <h3 class="mt-34">The Binary Trading Course is simplified into four levels</h3>
                        </div>
                        <div class="faq-content">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">BEGINNER LEVEL</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="listing-style">
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Sed ut perspiciatis unde omnis iste natus error</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">INTERMEDIATE LEVEL</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                        <div class="card-body">
                                            <ul class="listing-style">
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Sed ut perspiciatis unde omnis iste natus error</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">

                                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">STANDARD LEVEL</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                                        <div class="card-body">
                                            <ul class="listing-style">
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Sed ut perspiciatis unde omnis iste natus error</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">

                                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false">PROFESSIONAL LEVEL</a>
                                    </div>
                                    <div id="collapsefour" class="collapse" data-bs-parent="#accordion" style="">
                                        <div class="card-body">
                                            <ul class="listing-style">
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Sed ut perspiciatis unde omnis iste natus error</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check-circle"></i>
                                                    <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Course Outline Section End -->
        </div>
            <!-- Pricing section start -->
            <div class="rs-pricing style2 pt-120 pb-143 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Pricing</span>
                        <h2 class="title">
                            Our Pricing Plan
                        </h2>
                        <div class="heading-line">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 md-mb-30">
                            <div class="pricing-table">
                                <div class="pricing-badge">
                                    Silver
                                </div>
                                <div class="pricing-icon">
                                    <img src="assets/images/pricing/main-home/icons/1.png" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">29.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                        <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 md-mb-30">
                            <div class="pricing-table primary-bg">
                                <div class="pricing-badge white-color-bg">
                                    Gold
                                </div>
                                <div class="pricing-icon">
                                    <img src="assets/images/pricing/main-home/icons/2.png" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">39.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pricing-table">
                                <div class="pricing-badge">
                                    Platinum
                                </div>
                                <div class="pricing-icon">
                                    <img src="assets/images/pricing/main-home/icons/3.png" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">79.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 md-mb-30">
                            <div class="pricing-table primary-bg">
                                <div class="pricing-badge white-color-bg">
                                    Gold
                                </div>
                                <div class="pricing-icon">
                                    <img src="assets/images/pricing/main-home/icons/2.png" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">39.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Pricing section end -->
            <div class="rs-about pt-120 md-pt-80 ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pr-40 md-pr-15">
                            <div class="sec-title4">
                                <span class="sub-text">Meet The Facilitator</span>
                                <h2 class="title">Mr. Rohi</h2>
                                <div class="heading-line"></div>
                                <div class="desc desc-big">
                                    We donec pulvinar magna id leoersi pellentesque impered dignissim rhoncus euismod euismod eros vitae best consulting & financial services theme .
                                </div>
                                <div class="desc desc-big">
                                    We donec pulvinar magna id leoersi pellentesque impered dignissim rhoncus euismod euismod eros vitae best consulting & financial services theme .
                                </div>
                            </div>
                            <h3 class="mt-34">Extra Bonuses from the Facilitator</h3>
                            <ul class="listing-style">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span>4 Ebooks worth NGN 20,000</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span>Link to private community</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span>Accusamus et iusto odio </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="software-img">
                                <img src="{{asset('assets/images/about/about-us/1.jpg')}}" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial main-home rs-rain-animate style4 modify2 md-fixing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testi-image">
                                <img src="assets/images/testimonial/testimonial-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-50 md-pl-15">
                            <div class="sec-title mb-50">
                                <div class="sub-text choose">Testimonials</div>
                                <div class="desc blue-color">
                                    We are looking forward to helping you achieve financial success with this course. Here is what some of our students have to say about the Binary Trading Course...
                                </div>
                            </div>
                            <div class="rs-carousel owl-carousel"
                                 data-loop="true"
                                 data-items="1"
                                 data-margin="30"
                                 data-autoplay="true"
                                 data-hoverpause="true"
                                 data-autoplay-timeout="5000"
                                 data-smart-speed="800"
                                 data-dots="true"
                                 data-nav="false"
                                 data-nav-speed="false"

                                 data-md-device="1"
                                 data-md-device-nav="false"
                                 data-md-device-dots="false"
                                 data-center-mode="false"

                                 data-ipad-device2="1"
                                 data-ipad-device-nav2="false"
                                 data-ipad-device-dots2="false"

                                 data-ipad-device="1"
                                 data-ipad-device-nav="false"
                                 data-ipad-device-dots="true"

                                 data-mobile-device="1"
                                 data-mobile-device-nav="false"
                                 data-mobile-device-dots="false">
                                <div class="testi-item">
                                    <div class="author-desc">
                                        <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote2.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="author-img">
                                            <img src="assets/images/testimonial/main-home/1.jpg" alt="">
                                        </div>
                                        <div class="author-part">
                                            <a class="name" href="#">Mariya Khan</a>
                                            <span class="designation">CEO, Brick Consulting</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="author-desc">
                                        <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote2.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="author-img">
                                            <img src="assets/images/testimonial/main-home/2.jpg" alt="">
                                        </div>
                                        <div class="author-part">
                                            <a class="name" href="#">Sonia Akther</a>
                                            <span class="designation">CEO, Keen IT Solution</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="author-desc">
                                        <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote2.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="author-img">
                                            <img src="assets/images/testimonial/main-home/4.jpg" alt="">
                                        </div>
                                        <div class="author-part">
                                            <a class="name" href="#">Neymar Vuya</a>
                                            <span class="designation">Arist</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-inner blue-dark">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Cta section start -->
            <div class="rs-cta style1 bg7a pt-80">
                <div class="container">
                    <div class="cta-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-12 md-mb-30">
                                <span>Still confused on which course to learn?</span>
                                <div class="title-wrap">
                                    <h2 class="epx-title">Our Experts Are Ready To Help You</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 text-right col-md-12">
                                <div class="button-wrap">
                                    <a class="readon learn-more" href="contact.html">Get In Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta section end -->

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
