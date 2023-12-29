<!-- Start Footer -->
<footer class="footer-area bg-f">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3>About Us</h3>
                <p>{{ settings()->get('about_us') }}</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Opening hours</h3>
                <p>{{ settings()->get('opening_hours_1') }}</p>
                <p>{{ settings()->get('opening_hours_2') }}</p>
                <p>{{ settings()->get('opening_hours_3') }}</p>
                <p>{{ settings()->get('opening_hours_4') }}</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Contact information</h3>
                <p class="lead">{{ settings()->get('address') }}</p>
                <p class="lead"><a href="#">{{ settings()->get('contact_phone') }}</a></p>
                <p><a href="#"> {{ settings()->get('contact_email') }}</a></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Subscribe</h3>
                <div class="subscribe_form">
                    <form class="subscribe_form">
                        <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
                            type="email">
                        <button type="submit" class="submit">SUBSCRIBE</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <ul class="list-inline f-social">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="company-name">All Rights Reserved. &copy; {{ now()->year }} <a
                            href="#">{{ settings()->get('site_name') }}</a>
                        Design By :
                        <a href="https://html.design/">Morshedy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->
