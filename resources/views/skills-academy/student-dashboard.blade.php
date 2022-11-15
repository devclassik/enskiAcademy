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
                                        <a href="#"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
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
                                                <a href="mailto:contact@enski.net">contact@enski.net</a>
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
                                <a href="#">
                                    <img class="sticky-logo" src="{{asset('assets/images/logo-dark.png')}}" alt="logo">
                                </a>
                            </div>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="#" class="mobile-logo">
                                            <img src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu menu-item-has-children">
                                                 <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="/home-about">About</a>
                                            </li>
                                            <li class="menu-item-has-children">
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
                                    @if (!Auth::guest())
                                        <li><a class="quote-btn" href="/dologout">Logout</a></li>

                                    @else
                                        <li><a class="quote-btn" href="/my-account">Login/ Register</a></li>

                                    @endif
                                </ul>
                                <div class="toolbar-sl-share">
                                    <ul class="social">
                                        <li><a href="https://www.twitter.com/enski_official"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://fb.me/enski.impact.summit"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/enski-integrated-services/"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/enski_official"><i class="fa fa-instagram"></i></a></li>
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
                    <h1 class="page-title">Dashboard</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="#">Home</a>
                        </li>
                        <li>Dasdboard</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Checkout section start -->
            <div id="rs-checkout" class="rs-checkout pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="coupon-toggle">
                        <div id="accordion" class="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="card-title">
                                        <span><i class="fa fa-window-maximize"></i> List of paid courses</span>
                                        <!-- <button class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Click here to enter your code</button> -->
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <div class="coupon-code-input">
                                            <input type="text" name="coupon_code" placeholder="Coupon code" required="">
                                        </div>
                                        <button class="add-btn" type="submit">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full-grid">
                        <form method="post" action="">
                            <div class="ordered-product">
                                <div class="checkout-title">
                                    <h3>Your Courses</h3>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Title</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Medicine Bottle <strong><i class="fa fa-close"></i> 1</strong></td>
                                            <td>$30.00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Medicine Bottle <strong><i class="fa fa-close"></i> 1</strong></td>
                                            <td>$30.00</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>3</td>
                                            <th>Subtotal</th>
                                            <th>$60.00</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <th>Total</th>
                                            <th>$60.00</th>
                                            <td> <button class="add-btn" type="submit">Download</button></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                        <div class="payment-method mt-40 md-mt-20">
                            <div class="bottom-area">
                                <p class="mt-15">Seek for more courses</p>
                                <a href="/courses">
                                <button class="add-btn" >See more...</button>
                            </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Checkout section end -->

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
