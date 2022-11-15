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
                                        <a href="/homepage" class="mobile-logo">
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
                                                <a href="#">About</a>
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
                    <h1 class="page-title">Blog Update Pannel</h1>
                    <ul>
                        <li title="Enski - Nigeria's leading empowerment platform">
                            <a class="active" href="/homepage">Home</a>
                        </li>
                       <li>Cpannel</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->
                  <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-content z-index-1">
                                <p class="desc">
                                </p>
                                <div class="btn-part">
                                    @include('sweetalert::alert')
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <center>
                                    <a class="readon started get-new" >Manage your blog content here!!!</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Contact Section Start -->
            <div class="rs-contact pt-120 md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-60">
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Blog Angle</span>
                                    <h2 class="title white-color">Manage your blog content </h2>
                                </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-home"></i>
                                   </div>
                                   <div class="address-text">
                                        <span class="label">Email:</span>
                                        <a href="mailto:support@enski.com.ng">support@enski.com.ng</a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Phone:</span>
                                       <a href="tel:23481622372">(+234) 816-223-7272</a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc">Auta-Balefi, Abuja-Keffi Rd, New karu, Nassarawa State.</div>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-8 pl-70 md-pl-15">
                            <div class="contact-widget">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>

                               </div>
                                <div id="form-messages"></div>
                                <form  method="post" action="{{ route('blogAddNew') }}" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-12 mb-15">
                                                <label class="text-danger">Blog Picture</label>
                                                <input class="from-control" type="file" name="picture" required>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" name="tag" placeholder="Blog Tag" >
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" name="title" placeholder="Blog Title" >
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <textarea class="from-control"  name="phaseOne" placeholder="Phase 1" ></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <textarea class="from-control" name="phaseTwo" placeholder="Phase 2" ></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" name="phaseTwoB" placeholder="Phase 2 name" >
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text"  name="phaseThree" placeholder="Phase 3" >
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <textarea class="from-control" name="phaseThreeB" placeholder="Separate each list with ;" ></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <textarea class="from-control" name="phaseFour" placeholder="Phase 4" ></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <textarea class="from-control" name="phaseFive" placeholder="Phase 5" ></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <textarea class="from-control" name="phaseSix" placeholder="Enter Comment" ></textarea>
                                            </div>
                                            <!-- <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" name="message" placeholder="Your message Here" ></textarea>
                                            </div> -->
                                        </div>
                                        <div class="btn-part">
                                            <div class="form-group mb-0">
                                                <input class="readon learn-more submit" type="submit" value="Submit Now">
                                            </div><br>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section Start -->

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
