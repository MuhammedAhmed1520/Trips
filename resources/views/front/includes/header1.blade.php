<header id="header" class="navbar-static-top style1">
    <div class="hidden-mobile container">
        <address class="contact-details">
            <span class="contact-phone"><i class="soap-icon-phone circle"></i> 1-800-123-HELLO</span>
        </address>
        <ul class="social-icons style2 clearfix">
            <li class="twitter"><a title="" href="#" data-toggle="tooltip" data-original-title="twitter"><i class="soap-icon-twitter"></i></a></li>
            <li class="googleplus"><a title="" href="#" data-toggle="tooltip" data-original-title="googleplus"><i class="soap-icon-googleplus"></i></a></li>
            <li class="facebook"><a title="" href="#" data-toggle="tooltip" data-original-title="facebook"><i class="soap-icon-facebook"></i></a></li>
            <li class="linkedin"><a title="" href="#" data-toggle="tooltip" data-original-title="linkedin"><i class="soap-icon-linkedin"></i></a></li>
            <li class="vimeo"><a title="" href="#" data-toggle="tooltip" data-original-title="vimeo"><i class="soap-icon-vimeo"></i></a></li>
            <li class="dribble"><a title="" href="#" data-toggle="tooltip" data-original-title="dribble"><i class="soap-icon-dribble"></i></a></li>
            <li class="flickr"><a title="" href="#" data-toggle="tooltip" data-original-title="flickr"><i class="soap-icon-flickr"></i></a></li>
        </ul>
    </div>

    <div class="container">
        <h1 class="logo navbar-brand">
            <a href="index.html" title="Travelo - home">
                <img src="{{ asset('assets/front/images/logo.png') }}" alt="Travelo HTML5 Template">
            </a>
        </h1>
    </div>
    <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
        Mobile Menu Toggle
    </a>

    <div id="main-menu">
        <nav role="navigation" class="container">
            <ul class="menu">
                <li class="menu-item-has-children">
                    <a href="index.html">Home</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('home/category') }}"> Round trips</a>
                    <ul>
                        <li><a href=""> Classic</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('home/category') }}"> Nile Cruise</a>
                    <ul>
                        <li><a href="{{ url('home/category') }}"> Nile Cruises</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="{{ url('home/category') }}"> Day Trips</a>
                    <ul>
                        <li><a href="{{ url('home/category') }}"> from luxor</a></li>
                        <li><a href="{{ url('home/category') }}"> from hurgada </a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('home/transfer') }}"> Transfer</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('home/bulid-trip') }}"> Build Trip </a>
                </li>

            </ul>
        </nav>
    </div>

    <nav id="mobile-menu-01" class="mobile-menu collapse">
        <ul id="mobile-primary-menu" class="menu">
            <li class="menu-item-has-children">
                <a href="index.html">Home</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-0"></button>

            </li>
            <li class="menu-item-has-children">
                <a href="hotel-index.html">Hotels</a><button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu-submenu-item-1"></button>
                <ul id="mobile-menu-submenu-item-1" class="collapse">
                    <li><a href="hotel-index.html">Home Hotels</a></li>
                    <li><a href="hotel-list-view.html">List View</a></li>
                    <li><a href="hotel-grid-view.html">Grid View</a></li>
                    <li><a href="hotel-block-view.html">Block View</a></li>
                    <li><a href="hotel-detailed.html">Detailed</a></li>
                    <li><a href="hotel-booking.html">Booking</a></li>
                    <li><a href="hotel-thankyou.html">Thank You</a></li>
                </ul>
            </li>

        </ul>

        <ul class="mobile-topnav container">
            <li><a href="#">MY ACCOUNT</a></li>
            <li class="ribbon language menu-color-skin">
                <a href="#" data-toggle="collapse">ENGLISH</a>
                <ul class="menu mini" style="">
                    <li><a href="#" title="Dansk">Dansk</a></li>
                    <li><a href="#" title="Deutsch">Deutsch</a></li>
                    <li class="active"><a href="#" title="English">English</a></li>
                    <li><a href="#" title="Espa�ol">Espa�ol</a></li>
                    <li><a href="#" title="Fran�ais">Fran�ais</a></li>
                    <li><a href="#" title="Italiano">Italiano</a></li>
                    <li><a href="#" title="Magyar">Magyar</a></li>
                    <li><a href="#" title="Nederlands">Nederlands</a></li>
                    <li><a href="#" title="Norsk">Norsk</a></li>
                    <li><a href="#" title="Polski">Polski</a></li>
                    <li><a href="#" title="Portugu�s">Portugu�s</a></li>
                    <li><a href="#" title="Suomi">Suomi</a></li>
                    <li><a href="#" title="Svenska">Svenska</a></li>
                </ul>
            </li>
            <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
            <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
            <li class="ribbon currency menu-color-skin">
                <a href="#">USD</a>
                <ul class="menu mini" style="">
                    <li><a href="#" title="AUD">AUD</a></li>
                    <li><a href="#" title="BRL">BRL</a></li>
                    <li class="active"><a href="#" title="USD">USD</a></li>
                    <li><a href="#" title="CAD">CAD</a></li>
                    <li><a href="#" title="CHF">CHF</a></li>
                    <li><a href="#" title="CNY">CNY</a></li>
                    <li><a href="#" title="CZK">CZK</a></li>
                    <li><a href="#" title="DKK">DKK</a></li>
                    <li><a href="#" title="EUR">EUR</a></li>
                    <li><a href="#" title="GBP">GBP</a></li>
                    <li><a href="#" title="HKD">HKD</a></li>
                    <li><a href="#" title="HUF">HUF</a></li>
                    <li><a href="#" title="IDR">IDR</a></li>
                </ul>
            </li>
        </ul>

    </nav>

    <div id="travelo-signup" class="travelo-signup-box travelo-box">
        <div class="login-social">
            <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
            <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
        </div>
        <div class="seperator"><label>OR</label></div>
        <div class="simple-signup">
            <div class="text-center signup-email-section">
                <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
            </div>
            <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
        </div>
        <div class="email-signup">
            <form>
                <div class="form-group">
                    <input type="text" class="input-text full-width" placeholder="first name">
                </div>
                <div class="form-group">
                    <input type="text" class="input-text full-width" placeholder="last name">
                </div>
                <div class="form-group">
                    <input type="text" class="input-text full-width" placeholder="email address">
                </div>
                <div class="form-group">
                    <input type="password" class="input-text full-width" placeholder="password">
                </div>
                <div class="form-group">
                    <input type="password" class="input-text full-width" placeholder="confirm password">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Tell me about Travelo news
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                </div>
                <button type="submit" class="full-width btn-medium">SIGNUP</button>
            </form>
        </div>
        <div class="seperator"></div>
        <p>Already a Travelo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
    </div>
    <div id="travelo-login" class="travelo-login-box travelo-box">
        <div class="login-social">
            <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
            <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
        </div>
        <div class="seperator"><label>OR</label></div>
        <form>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="email address">
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="password">
            </div>
            <div class="form-group">
                <a href="#" class="forgot-password pull-right">Forgot password?</a>
                <div class="checkbox checkbox-inline">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </form>
        <div class="seperator"></div>
        <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
    </div>
</header>