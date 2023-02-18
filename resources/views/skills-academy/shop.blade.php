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
                                    <li><a href="https://www.twitter.com/enski_connect"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://fb.me/enski.impact.summit"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/company/enski-integrated-services/"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/enski_impact_summit/"><i
                                                class="fa fa-instagram"></i></a></li>
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
                                <a href="/homepage"><img src="{{ asset('assets/images/logo-dark.png') }}"
                                        alt=""></a>
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
                                            <a class="hidden-xs rs-search" data-bs-toggle="modal"
                                                data-bs-target="#searchModal" href="#">
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
                    <a class="active" href="/skills-academy">Skills Academy</a>
                </li>
                <li title="Go To Product">
                    <a class="active" href="/shops">Courses</a>
                </li>
                <li title="Go To the Business category archives">
                    <a class="active" href="binary-trading.html">{{ $shops->class }}</a>
                </li>
                <li>{{ $shops->title }}</li>
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
                            <img src="{{ asset('storage') }}/{{ $shops->picture_path }}"
                                style="height:300px; width: 100%" alt="Single Product">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="single-price-info pl-30 sm-pl-0">
                        <!-- {{ $shops->created_at->diffForHumans() }} -->
                        <h4 class="product-title">{{ $shops->title }}</h4>
                        <span class="single-price">&#x20A6; {{ number_format($shops->price) }}</span>
                        <p class="some-text">{{ $shops->description }}</p>

                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                <div class="row" style="margin-bottom:40px;">
                                    <div class="col-md-8 col-md-offset-2">
                                        <input type="hidden" name="email" value="alomajaopemipo@gmail.com"> {{-- required --}}
                                        <input type="hidden" name="orderID" value="345">
                                        <input type="hidden" name="amount" value="{{ 100 * ($shops->price) }} "> {{-- required in kobo --}}
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['course_title' => '$shops->title']), }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                        <p>
                                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                            @include('sweetalert::alert')
                        <p class="category"><span>Category:</span><a href="#"> {{ $shops->category }} </a></p>
                    </div>
                </div>
            </div>
            <div class="tab-area">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                            data-bs-target="#description" type="button" role="tab" aria-controls="description"
                            aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                            data-bs-target="#description" type="button" role="tab" aria-controls="description"
                            aria-selected="false">Curriculum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews
                            (0)</button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                        aria-labelledby="description-tab">
                        <p class="dsc-p">{{ $shops->full_description }}</p>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="reviews-grid">
                            <div class="top-area">
                                <p>Reviews dropping soon.</p>
                                <h6 class="mb-0">Be the first to review “Digital CC Camera”</h6>
                            </div>

                            <form class="comment-form" id="commentform">
                                @csrf
                                <p class="comment-notes">Your email address will not be published. Required fields are
                                    marked *</p>

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
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 col-sm-6 md-mb-45">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{ asset('storage') }}/{{ $course->picture_path }}"
                                    style="height:300px; width: 100%" alt="">
                                <div class="overley">
                                    <a href="{{ route('shop', $course->id) }}"><i
                                            class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a
                                        href="{{ route('shop', $course->id) }}">{{ $course->title }}</a></h2>
                                <span class="price">&#x20A6; {{ number_format($course->price) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
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
<div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
    aria-hidden="true">
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
