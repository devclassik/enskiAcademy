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
                                        <a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a>
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
                                <a href="index.html">
                                    <img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
                                </a>
                            </div>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="index.html" class="mobile-logo">
                                            <img src="assets/images/logo-light.png" alt="logo">
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
                                            {{--      add a comming soon page @todo--}}
                                                    <li><a href="#">Financial Services</a></li>
                                                    <li><a href="#">Skill Set Connector</a> </li>
                                                    <li><a href="#">Logistics</a> </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children current-menu-item">
                                                <a href="#">Account</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children current-menu-item">
                                                        <a href="#">Shop</a>
                                                        <ul class="sub-menu right">
                                                            <li class="active"><a href="shop.html">Shop</a></li>
                                                            <li><a href="/shop">Shop </a></li>
                                                            <li><a href="/cart">Cart</a></li>
                                                            <li><a href="/checkout">Checkout</a></li>
                                                            <li><a href="/my-account">My Account</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                       <a href="/pricing">Pricing</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                               <a href="/blog">Blog</a>
                                               <ul class="sub-menu">
                                                   <li><a href="/blog">Blog</a> </li>
                                               </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
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
                    <h1 class="page-title">Shop</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Products</li>
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
                   	    <div class="col-lg-4 col-md-6 mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/1.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Digital CC Camera</a></h2>
                   	                <span class="price">$150.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6 mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/2.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Digital Hand Watch</a></h2>
                   	                <span class="price">$55.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6 mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/3.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	                <span class="onsale">sale!</span>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Digital Sound Mk</a></h2>
                   	                <span class="price">$50.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6 mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/4.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Droit Sound Mk</a></h2>
                   	                <span class="price">$30.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6 mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/5.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	                <span class="onsale">sale!</span>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Electronics Device</a></h2>
                   	                <span class="price">$30.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6 mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/6.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	                <span class="onsale">sale!</span>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Head Phone Pro</a></h2>
                   	                <span class="price">$45.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6 sm-mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/7.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Portable Sound Mk</a></h2>
                   	                <span class="price">$150.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6 sm-mb-80">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/8.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	                <span class="onsale">sale!</span>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Smart Device Pm</a></h2>
                   	                <span class="price">$50.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	    <div class="col-lg-4 col-md-6">
                   	        <div class="product-list">
                   	            <div class="image-product">
                   	                <img src="assets/images/shop/9.jpg" alt="">
                   	                <div class="overley">
                   	                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                   	                </div>
                   	            </div>
                   	            <div class="content-desc text-center">
                   	                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Smart Hand Watch</a></h2>
                   	                <span class="price">$75.00</span>
                   	            </div>
                   	        </div>
                   	    </div>
                   	     <div class="col-lg-12 text-center pt-40">
                   	         <ul class="pagination-part">
                   	             <li class="active"><a href="#">1</a></li>
                   	             <li><a href="#">2</a></li>
                   	             <li><a class="next-page" href="#">Next</a></li>
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