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
                                            <li class="menu-item-has-children rs-mega-menu current-menu-item">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/entertainment">Entertainment</a> </li>
                                                    <li><a href="/skills-academy">Skills Academy</a> </li>
                                                    <li><a href="/branding">Branding Agency</a> </li>
                                                    {{--    add a comming soon page @todo--}}
                                                    <li><a href="#">Financial Services</a></li>
                                                    <li><a href="#">Skill Set Connector</a> </li>
                                                    <li><a href="#">Logistics</a> </li>
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
    </div>
    <!--Full width header End-->

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Shop</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="skills-academy.html">Skills Academy</a>
                </li>
                <li title="Go To Product">
                    <a class="active" href="courses.html">Courses</a>
                </li>
                <li title="Go To the Business category archives">
                    <a class="active" href="binary-trading.html">Binary Trading</a>
                </li>
                <li>Binary Trading Elite Course</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Shop Single Start -->
    <div id="rs-single-shop" class="rs-single-shop pt-120 pb-80 md-pt-80 sm-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 sm-mb-30">
                    <div class="single-product-image">
                        <div class="images-single">
                            <img src="assets/images/shop/1.jpg" alt="Single Product">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="single-price-info pl-30 sm-pl-0">
                        <h4 class="product-title">Binary Trading Elite Course</h4>
                        <span class="single-price">&#x20A6; 49,999</span>
                        <p class="some-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <form>
                            <input type="number" class="input-text" step="1" min="1" value="1">
                            <button class="add-btn ml-10" type="submit">Add To cart</button>
                        </form>
                        <p class="category"><span>Category:</span><a href="#"> Trading</a></p>
                    </div>
                </div>
            </div>
            <div class="tab-area">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Curriculum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (0)</button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <p class="dsc-p">A product can be classified as tangible or intangible. A tangible product is a physical object that can be perceived by touch such as a building, vehicle, gadget, or clothing. An intangible product is a product that can only be perceived indirectly such as an insurance policy</p>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="reviews-grid">
                            <div class="top-area">
                                <p>There are no reviews yet.</p>
                                <h6 class="mb-0">Be the first to review “Digital CC Camera”</h6>
                            </div>

                            <form class="comment-form" id="commentform">
                                <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>

                                <div class="placeholder-cntrl">
                                    <label>Name *</label>
                                    <input type="text" name="name" size="30" required="">
                                </div>
                                <div class="placeholder-cntrl">
                                    <label>Email *</label>
                                    <input type="Email" name="email" size="30" required="">
                                </div>
                                <div class="ratings">Your rating
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <div class="placeholder-cntrl">
                                    <label>Your review *</label>
                                    <textarea required=""></textarea>
                                </div>
                                <div class="btn-part">
                                    <button class="add-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- .tab-area -->
        </div>
    </div>
    <!-- Shop Single Start -->

    <!--Shop part end-->
    <div class="rs-shop-part pb-120 md-pb-75">
        <div class="container">
            <h4 class="title pb-23 md-pb-10">Related courses</h4>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 md-mb-45">
                    <div class="product-list">
                        <div class="image-product">
                            <img src="assets/images/shop/1.jpg" alt="">
                            <div class="overley">
                                <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="content-desc text-center">
                            <h2 class="loop-product-title pt-15"><a href="shop-single.html">Binary Trading Regular Course</a></h2>
                            <span class="price">&#x20A6; 4,999</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 md-mb-45">
                    <div class="product-list">
                        <div class="image-product">
                            <img src="assets/images/shop/2.jpg" alt="">
                            <div class="overley">
                                <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="content-desc text-center">
                            <h2 class="loop-product-title pt-15"><a href="shop-single.html">Binary Trading Premium Course</a></h2>
                            <span class="price">&#x20A6; 24,999</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-list">
                        <div class="image-product">
                            <img src="assets/images/shop/3.jpg" alt="">
                            <div class="overley">
                                <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="content-desc text-center">
                            <h2 class="loop-product-title pt-15"><a href="shop-single.html">Prescription Book</a></h2>
                            <span class="price">&#x20A6; 300.00</span>
                        </div>
                    </div>
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
