@include('components.header')
<body class="defult-home">

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
                                                05 kandi BR. New York
                                            </span>
                                </li>
                                <li class="contact-part">
                                    <i class="flaticon-email"></i>
                                    <span class="contact-info">
                                                <span>E-mail</span>
                                                <a href="#"> support@rstheme.com</a>
                                            </span>
                                </li>
                                <li class="contact-part no-border">
                                    <i class="flaticon-call"></i>
                                    <span class="contact-info">
                                                <span>Phone</span>
                                                 +019988772
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
                                    <li class="rs-mega-menu"> <a href="/homepage">Home</a>
                                        <!-- //.mega-menu -->
                                    </li>
                                    <li>
                                        <a href="/home-about">About</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="/entertainment" target="_blank">Entertainment</a> </li>
                                            <li><a href="/skills-academy" target="_blank">Skills Academy</a> </li>
                                            <li><a href="/branding" target="_blank">Branding Agency</a> </li>
                                            <li><a href="#">Financial Services</a></li>
                                            <li><a href="#">Skill Set Connector</a> </li>
                                            <li><a href="#">Logistics</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/home-contact">Contact</a>
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
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
            <h1 class="page-title">Faq</h1>
            <ul>
                <li title="Enski - your reason to smile">
                    <a class="active" href="/homepage">Home</a>
                </li>
                <li>Faq</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Faq Section Start -->
    <div id="rs-faq" class="rs-faq gray-color pt-120 md-pb-395 pb-435 md-pt-90 md-pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-40 md-pr-15">
                    <div class="images-part">
                        <img src="{{asset('assets/images/about/about-home.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title2 mb-45">
                        <span class="sub-text style-bg">Faqs</span>
                        <h2 class="title title6">
                            Do You Have Any Questions?
                        </h2>
                    </div>
                    <div class="faq-content">
                        <div id="accordion" class="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">Where should I incorporate my business?</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Impress clients new and existing with elite construction brochures. Impress clients.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">Where should I incorporate my business?</a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Impress clients new and existing with elite construction brochures. Impress clients.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">How can I safely use cleaning chemicals?</a>
                                </div>
                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Impress clients new and existing with elite construction brochures. Impress clients.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false">What type of company is measured?</a>
                                </div>
                                <div id="collapsefour" class="collapse" data-bs-parent="#accordion" style="">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Impress clients new and existing with elite construction brochures. Impress clients.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Section End -->

    <!-- Contact Start -->
    <div class="rs-contact style2 negative-margin">
        <div class="container">
            <div class="contact-box-wrap">
                <div class="sec-title2 text-center mb-33">
                    <span class="sub-text style-bg con-bg white-color">Contact</span>
                    <h2 class="title testi-title white-color">
                        Request Free Consultation
                    </h2>
                </div>
                <div id="form-messages"></div>
                <form id="contact-form" method="post" action="mailer.php">
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                            </div>
                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                            </div>
                            <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                <input class="from-control" type="text" id="website" name="website" placeholder="socail media handles e.g facebook" required="">
                            </div>

                            <div class="col-lg-12 mb-35">
                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                            </div>
                        </div>
                        <div class="btn-part text-center">
                            <input class="readon learn-more sub-con submit" type="submit" value="Submit Now">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Partner Start -->
    <div class="rs-partner pt-80 mt-20 pb-70">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/1.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/1.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/2.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/2.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/3.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/3.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/4.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/4.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/5.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/5.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/6.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/6.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/7.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/7.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/8.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/8.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <a href="#">
                            <img class="hover-logo" src="{{asset('assets/images/partner/9.png')}}" alt="">
                            <img class="main-logo" src="{{asset('assets/images/partner/9.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->

</div>
<!-- Main content End -->

<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="/homepage"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                    </div>
                    <div class="textwidget pb-30"><p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">Services</h3>
                    <ul class="site-map">
                        <li><a href="/entertainment" target="_blank">Entertainment</a> </li>
                        <li><a href="/skills-academy" target="_blank">Skills Academy</a> </li>
                        <li><a href="/branding" target="_blank">Branding Agency</a> </li>
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
                            <div class="desc">374 FA Tower, William S Blvd 2721, IL, USA</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:(+880)155-69569">(+880)155-69569</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                Opening Hours: 10:00 - 18:00
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h3 class="widget-title">Newsletter</h3>
                    <p class="widget-desc">We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>
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
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="/home-faq">FAQs</a></li>
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
</body>
</html>
