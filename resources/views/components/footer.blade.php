<footer id="rs-footer" class="rs-footer style1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="/homepage"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                    </div>
                    <div class="textwidget pb-30"><p>Enski is a one-stop empowerment platform that offers multiple services that will help you, your business or brand reach its infinite potential.</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="https://www.twitter.com/enski_official" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>
                        <li>
                            <a href="https://fb.me/enski.impact.summit" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/enski-integrated-services/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/enski_official" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">Our Services</h3>
                    <ul class="site-map">
                        <li><a href="/entertainment">Entertainment</a> </li>
                        <li><a href="/skills-academy">Skills Academy</a> </li>
                        <li><a href="/branding">Branding Agency</a> </li>
                        <li><a href="/coming-soon">Financial Services</a></li>
                        <li><a href="/coming-soon">Skill Set Connector</a> </li>
                        <li><a href="/coming-soon">Logistics</a> </li>
                    </ul>

                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">Auta-Balefi, Abuja-Keffi Rd, New karu, Nassarawa State</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                            <a href="tel:(+234)8160055067">(+234)8160055067</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                            <a href="mailto:contact@enski.net">contact@enski.net</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                            Opening Hours: 12:01 - 18:00
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <form method="post" action="{{route('subscribers')}}">
                        @csrf
                        <h3 class="widget-title">Newsletter</h3>
                    <p class="widget-desc">Subscribe to our newsletters to stay updated with the latest and most resourceful info to help you or your brand stand out.</p>
                    <p>
                        <input type="email" name="news_email" placeholder="Your email address" required="">
                        <em class="paper-plane"><input type="submit" value="Sign up"></em>
                        <i class="flaticon-send"></i>
                    </p>
                    </form>

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
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/shops">Courses</a></li>
                        <li><a href="/faq">FAQs</a></li>
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
