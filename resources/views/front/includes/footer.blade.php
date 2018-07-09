 <footer id="footer" class="style3">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h2>Discover</h2>
                            <ul class="discover triangle hover row">
                                <li class="col-xs-6"><a href="#">Day Trips</a></li>
                                <li class="col-xs-6"><a href="#">Round Trip </a></li>
                                <li class="col-xs-6"><a href="#"> Cruise Trips</a></li>
                                <li class="col-xs-6"><a href="#">Latest trips</a></li>
                                <li class="col-xs-6"><a href="#">Press Releases</a></li>
                                <li class="col-xs-6"><a href="#">Why Host</a></li>
                                <li class="col-xs-6"><a href="#">Blog Posts</a></li>
                                <li class="col-xs-6"><a href="#">Social Connect</a></li>
                                <li class="col-xs-6"><a href="#">Help Topics</a></li>
                                <li class="col-xs-6"><a href="#">Site Map</a></li>
                                <li class="col-xs-6"><a href="#">Policies</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h2>Popular Trips</h2>
                            <ul class="travel-news">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('assets/front/images/logo.png') }}" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Amazing Places</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">25 Sep, 2013</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Travel Insurance</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">24 Sep, 2013</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h2>Mailing List</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <br />
                            <div class="icon-check">
                                <style>
                                    .icon-check:after{
                                        width: 0;
                                        height: 0;
                                        background: none;
                                    }
                                </style>
                                <form method="post" action="{{url('home/subscribe')}}">
                                    {{csrf_field()}}
                                <input type="text" name="email" class="input-text full-width" placeholder="your email" />
                                <button type="submit" class="btn btn-success" style="margin-top: 5px;width: 100%;">Subscribe Now</button>
                                </form>
                            </div>
                            <br />
                            <span>We respect your privacy</span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                            <h2>About Reisen</h2>
                            <p>{{\Facades\App\Helper\IceHelper::getSetting('About Us')}}</p>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i>{{\Facades\App\Helper\IceHelper::getSetting('Phone')}}</span>
                                <br />
                                <a href="#" class="contact-email">help@travelo.com</a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="{{\Facades\App\Helper\IceHelper::getSetting('Twitter')}}" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="{{\Facades\App\Helper\IceHelper::getSetting('Google Plus')}}" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="{{\Facades\App\Helper\IceHelper::getSetting('Facebook')}}" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                <li class="linkedin"><a title="linkedin" href="{{\Facades\App\Helper\IceHelper::getSetting('LinkedIn')}}" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                <li class="vimeo"><a title="vimeo" href="{{\Facades\App\Helper\IceHelper::getSetting('Vimeo')}}" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                <li class="dribble"><a title="dribble" href="{{\Facades\App\Helper\IceHelper::getSetting('Dribble')}}" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                <li class="flickr"><a title="flickr" href="{{\Facades\App\Helper\IceHelper::getSetting('Flickr')}}" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom gray-area">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.html" title="Travelo-home">
                            <img src="{{ asset('assets/front/images/logo.png') }}"  width="165" height="30"   alt="" />
                        </a>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p>&copy; 2014 Reisen in aEgypten</p>
                    </div>
                </div>
            </div>
        </footer>