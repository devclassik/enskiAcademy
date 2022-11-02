@include('components.header')
    <!--Preloader area End here-->

		<!-- Main content Start -->
        <div class="main-content">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">
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
                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->

                                    </div>
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
                    <h1 class="page-title">Shop</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="/homepage">Home</a>
                        </li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!--Shop part start-->
            <div class="rs-shop-part pt-120 pb-120 md-pt-70 md-pb-80">
                <div class="container">
                   	<div class="row align-items-center rs-vertical-middle shorting mb-50">
                   	    <div class="col-sm-6 col-12">
                   	        <p class="woocommerce-result-count">Showing 1-9 of 12 results</p>
                   	    </div>
                   	    <div class="col-sm-6 col-12 sm-mt-20">
                   	        <select class="from-control">
                   	            <option>Default sorting</option>
                   	            <option>Sort by popularity</option>
                   	            <option>Sort by average rating</option>
                   	            <option>Sort by lates</option>
                   	            <option>Sort by price: low to high</option>
                   	            <option>Sort by price: high to low</option>
                   	        </select>
                   	    </div>
                   	</div>
                   	<div class="row">
                        @foreach($courses as $course)
                   	    <div class="col-lg-4 col-md-6 mb-80">


                   	        <div class="product-list">
                   	            <div class="image-product">
                                    <img src="{{asset('storage')}}/{{$course->picture_path}}"  style="height:300px; width: 100%" alt="">
                                    <div class="overley">
                   	                    <a href="{{route('shop', $course->id)}}"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="{{route('shop', $course->id)}}">{{$course->title}}</a></h2>
                   	                <span class="price">&#x20A6;{{number_format($course->price)}}</span>
                   	            </div>
                   	        </div>
                   	    </div>
                        @endforeach

                   	     <div class="col-lg-12 text-center pt-40">
                   	         <ul class="pagination-part">
                   	             <li class="active"><a href="#">1</a></li>
                   	             <li><a href="#">2</a></li>
                   	             <li><a class="next-page" href="#">{{$course ->links}}</a></li>
                   	         </ul>
                   	     </div>
                   	</div>
                </div>
            </div>
            <!--Shop part end-->
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
