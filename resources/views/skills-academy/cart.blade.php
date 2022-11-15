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
                                        <a href="/shops"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
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
                                                <a href="mailto:support@enski.com.ng">support@enski.com.ng</a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                             <i class="flaticon-call"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
                                                08162237272
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
                                <a href="/shops">
                                    <img class="sticky-logo" src="{{asset('assets/images/logo-dark.png')}}" alt="logo">
                                </a>
                            </div>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="/shops" class="mobile-logo">
                                            <img src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu"> <a href="/skill-academy">Home</a>
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
                                            @if (!Auth::guest())
                                            <li><a class="quote-btn" href="/dologout">Logout</a></li>

                                            @else
                                            <li><a class="quote-btn" href="/my-account">Login/ Register</a></li>

                                            @endif
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
                                    @include('components.socials')
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
            <div class="rs-breadcrumbs img2">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Cart</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="/skill-academy">Home</a>
                        </li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Cart Section Start -->
           <div class="rs-cart pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="cart-wrap">
                        <form >
                            method="post" action="{{ route ('pay') }}"
{{--                            <form method="post" action="{{route('cart', $shops->id)}}">--}}

                            @csrf
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name">Course Title</th>
                                        <th class="product-price">Price</th>
{{--                                        <th class="product-quantity">Quantity</th>--}}
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="{{asset('storage')}}/{{$courses->icon_path}}" alt=""></a></td>
                                        <td class="product-name"><a href="#">{{$courses->title}}</a></td>
{{--                                        {{number_format($shops->price)}}--}}
                                        <td class="product-price"><span>&#x20A6;</span>{{number_format($courses->price)}}</td>
{{--                                        <td class="product-quantity"><input type="number" class="input-text" value="1" id="qty" pattern="[0-9]*"></td>--}}
                                        <td class="subtotal"><span class="amount" id="price"><span class="symbol">&#x20A6;</span>{{number_format($courses->price)}}</span></td>
                                    </tr>
                                    <tr>
                                        <!-- <td colspan="6" class="action text-right">
                                            <div class="coupon">
                                                <input type="text" name="text" placeholder="Coupon code" required="">
                                                <button class="add-btn" type="submit">Apply Coupon</button>
                                            </div>
                                            <div class="update-cart">
                                                <button class="add-btn" type="submit">Update cart</button>
                                            </div>
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals pt-70 md-pt-50">
                            <div class="cart-totals">
                                <h5 class="title mb-25">Cart totals</h5>
                                <table class="cart-total-table">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount"><span>&#x20A6;</span>{{number_format($courses->price)}}</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount"><span>&#x20A6;</span>{{number_format($courses->price)}}</span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form method="post" action="{{route('payee')}}">
                                    @csrf
                                    <div class="wc-proceed-to-checkout">
                                        <button class="add-btn" type="submit"> Proceeds to Payment</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart Section End -->

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
<script>

function doMath() {
var numOne = document.getElementById('qty').value;
var numTwo = document.getElementById('num2').value;
var theProduct = (parseInt(numOne) * parseInt(numTwo));
console.log('Product:' + theProduct + '\nSum: ' + (parseInt(numOne) + parseInt(numTwo)));
}
</script>

<!-- modernizr js -->
<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
<!-- jquery latest version -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Menu js -->
<script src="{{asset('assets/js/rsmenu-main.js')}}"></script>
<!-- op nav js -->
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Skill bar js -->
<script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- counter top js -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<!-- particles js -->
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- pointer js -->
<script src="{{asset('assets/js/pointer.js')}}"></script>
<!-- contact form js -->
<script src="{{asset('assets/js/contact.form.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
