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
            <div class="rs-breadcrumbs img4">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title new-title pb-10">Servo Project Joins The Linux Foundation Fold Desco</h1>
                    <ul>
                        <li title="Enski - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="/homepage">Home</a>
                        </li>
                        <li title="Go to Blog"><a class="active" href="/homepage">Blog</a></li>
                        <li title="Go to the It Services category archives"><a class="active" href="/homepage">It Services</a></li>
                        <li>Servo Project Joins The Linux Foundation Fold Desco</li>
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
                                            <a href="#"><img src="{{asset('assets/images/blog/inner/1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="#">pen Source Job Report Show More Openings Fewer </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                January 21, 2020
                                            </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="#"><img src="{{asset('assets/images/blog/inner/2.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="#">Tech Products That Makes Its Easier to Stay at Home</a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                January 21, 2020
                                            </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="#"><img src="{{asset('assets/images/blog/inner/3.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="#">Necessity May Give Us Your Best Virtual Court System </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                January 21, 2020
                                            </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="#"><img src="{{asset('assets/images/blog/inner/4.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="#">Servo Project Joins The Linux Foundation Fold Desco </a>
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
                                <div class="col-lg-12">
                                    <div class="blog-details">
                                        <div class="bs-img mb-35">
                                            <a href="#"><img src="{{asset('assets/images/blog/inner/5.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                <li>
                                                    <span class="p-date"><i class="fa fa-calendar-check-o"></i> January 21, 2020 </span>
                                                </li>
                                                <li>
                                                    <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                                                </li>
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                                        <a href="#">Strategy</a>
                                                    </div>
                                                </li>
                                                <li class="post-comment"> <i class="fa fa-comments-o"></i> 1</li>
                                            </ul>
                                            <p>
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled data structures manages data in technology.
                                            </p>
                                            <blockquote><p>We can easily manage if we will only take, each day, the burden appointed to it. But the load will be too heavy for us if we carry yesterday’s burden over again today, and then add the burden of the morrow before we are required to bear it.<br>
                                            <cite>Robert Calibo</cite></p></blockquote>
                                            <h3>Digital technology on the cutting edge</h3>
                                            <p>

                                            </p>
                                            <ul class="dots">
                                                <li>How will digital activities impact traditional manufacturing.</li>
                                                <li>All these digital elements and projects aim to enhance .</li>
                                                <li>I monitor my staff with software that takes screenshots.</li>
                                                <li>Laoreet dolore magna niacin sodium glutimate aliquam hendrerit.</li>
                                                <li>Minim veniam quis niacin sodium glutimate nostrud exerci dolor.</li>
                                            </ul>
                                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                            <div class="bs-img mb-30">
                                                <img src="{{asset('assets/images/blog/inner/6.jpg')}}" alt="">
                                            </div>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                            <h3 class="comment-title">1 comment on “Servo Project Joins The Linux Foundation Desco”</h3>
                                            <div class="comment-body">
                                               <div class="rstheme-logo">
                                                   <img src="assets/images/rstheme.png" alt="">
                                               </div>
                                               <div class="comment-meta">
                                                   <span><a href="#">Admin</a></span>
                                                   <a href="#">December 3, 2020 at 8:30 am</a>
                                                   <p class="mb-15">
                                                       Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est
                                                   </p>
                                                   <div class="btn-part">
                                                      <a class="readon reply" href="#">Reply</a>
                                                   </div>
                                               </div>
                                            </div>
                                            <h3 class="comment-title">Leave a Reply</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <div class="comment-note">
                                                <div id="form-messages"></div>
                                                <form id="contact-form" method="post" action="mailer.php">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                            </div>
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                            </div>
                                                            <div class="col-lg-12 mb-30">
                                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="btn-part">
                                                           <a class="readon learn-more post" href="#">Post Comment</a>
                                                        </div>
                                                    </fieldset>
                                                </form>
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
