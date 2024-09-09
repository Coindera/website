<?PHP
if($_SERVER['HTTP_USER_AGENT'] == 'Mozilla/5.0 (compatible; redditbot/1.0; +http://www.reddit.com/feedback)'){
	$meta_tags = '_reddit_og.php';
} else {
	$meta_tags = '_default_og.php';
}
if($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'){
	$meta_tags = '_facebook_og.php';
} else {
	$meta_tags = '_default_og.php';
}
include '/var/www/config/plans.php';
?>
<!doctype html>
<html lang="en"><head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>Bitcoin Alerts &amp; Cryptocurrency Monitoring Made Easy - Coindera</title>
  <meta name="description" content="Create powerful bitcoin alerts using criteria not available through less advanced bitcoin alert services. <?=NUM_MARKETS?> exchanges and <?=NUM_CRYPTOCURRENCIES?> cryptocurrencies supported.">
  <meta name="keywords" content="bitcoin alerts, bitcoin price alert, cryptocurrency alerts, track bitcoin">
  <meta property="og:title" content="Bitcoin Alerts & Cryptocurrency Monitoring Made Easy - Coindera" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://coindera.com" />
  <?PHP include $meta_tags ?>

  <link href="/assets/img/coindera.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
  <link href="/assets/img/coindera.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
  <link href="/assets/img/coindera.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
  <link href="/assets/img/coindera.57x57.png" rel="apple-touch-icon" type="image/png">
  <link href="/assets/img/favicon.png" rel="icon" type="image/png">
  <link rel="shortcut icon" href="/assets/img/favicon.ico">

  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/assets/css/font-lineicons.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/assets/css/animate.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/assets/css/toastr.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all" />

  <!--[if lt IE 9]>
    <script src="/assets/js/html5.js"></script>
    <script src="/assets/js/respond.min.js"></script>
  <![endif]-->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-52851137-1', 'auto');
    ga('send', 'pageview');
  </script>
  <meta property="twitter:account_id" content="4503599630102310" />
  <meta name="google-site-verification" content="Bl6u60mzyB_5zAM59bwj4ZgxCsoNAKBwotqHuVds7-8" />
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script>
  window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#1ac6ff",
        "text": "#ffffff"
      },
      "button": {
        "background": "#fff",
        "text": "#1ac6ff"
      }
    },
    "theme": "classic",
    "content": {
      "message": "Coindera uses cookies to ensure you get the best experience on our website.",
      "link": "Privacy Policy",
      "href": "https://coindera.com/privacy.php"
    }
  })});
  </script>
</head>

<body id="landing-page">

  <!-- Preloader -->
  <div id="mask">
    <div id="loader"></div>
  </div>

  <header>
    <nav class="navigation navigation-header">
      <div class="container">
        <div class="navigation-brand">
          <div class="brand-logo">
            <a href="https://www.coindera.com" class="logo"></a>
          </div>
          <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navigation-navbar">
          <ul class="navigation-bar navigation-bar-right">
            <li><a href="https://app.coindera.com">Login</a></li>
            <li class="featured"><a href="https://app.coindera.com/signup">Sign up</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div id="hero" class="static-header light clearfix">
    <div class="text-heading">
      <h1 class="animated hiding" data-animation="bounceInDown" data-delay="0">Bitcoin alerts <span class="highlight">done right</span>!</h1>
      <p class="animated hiding" data-animation="fadeInDown" data-delay="500">Monitor <?=NUM_CRYPTOCURRENCIES?> cryptocurrencies. Get advanced alerts based on Buy, Sell, Volume and more.</p>
      <ul class="list-inline">
        <li><a href="https://app.coindera.com/signup?plan=free" class="btn btn-primary animated hiding" data-animation="bounceIn" data-delay="700">Get started for free!</a></li>
      </ul>
    </div>
    <div class="video-wrapper">
      <div class="container">
        <img src="/assets/img/features/app_block.png" alt="video" class="img-responsive animated hiding" data-animation="bounceInUp" data-delay="1000" />
      </div>
    </div>
  </div>
  <a id="showHere"></a>

  <section id="about" class="section dark">
    <div class="container">
      <div class="tab-content alt">
        <div class="tab-pane active" id="third-tab-alt">
          <div class="section-header animated hiding center" data-animation="fadeInDown">
            <h2>We Make It <span class="highlight">Simple</span></h2>
            <div class="sub-heading">
              Coindera makes it easy to monitor <strong>Bitcoin</strong> and <?=NUM_CRYPTOCURRENCIES?> <strong>cryptocurrencies</strong>.
            </div>
          </div>
          <div class="section-content row">
            <div class="col-sm-4">
              <article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="0">
                <i class="howitworks icon icon-arrows-27 icon-active"></i>
                <span class="h7">CREATE ALERTS</span>
                <p class="thin">We support all major <a href="https://coindera.com/markets.php">markets</a><br />
                and more than <?=NUM_CRYPTOCURRENCIES?> cryptocurrencies.</br> Create an alert in less than 30 seconds.</p>
              </article>
              <!--<span class="icon icon-arrows-04"></span>-->
            </div>
            <div class="col-sm-4">
              <article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="400">
                <i class="howitworks icon icon-seo-icons-03 icon-active"></i>
                <span class="h7">OUR SYSTEM RUNS 24/7</span>
                <p class="thin">Coindera monitors the markets for events<br /> 
                such as price changes, volume changes or increases in price.</p>
              </article>
              <!--<span class="icon icon-arrows-04"></span>-->
            </div>
            <div class="col-sm-4">
              <article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="800">
                <i class="howitworks icon icon-chat-messages-01 icon-active"></i>
                <span class="h7">RECEIVE NOTIFICATIONS</span>
                <p class="thin">Get real-time notifications via Telegram, email, international SMS, or receive push notifications on your<br /> 
                iOS or Android device.<br /></p>
              </article>
            </div>
          </div>
          <br />
          <br />
        </div>
      </div>
    </div>
  </section>

  <hr class="no-margin" />

  <section id="process" class="section inverted">
    <div class="container">
      <div class="section-content row">
        <div class="col-sm-6 pull-right animated hiding" data-animation="fadeInRight">
          <img src="/assets/img/features/content_image1.png" class="img-responsive" alt="process 2" />
        </div>
        <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
          <br /><br />
          <article>
            <h3>ADVANCED <span class="highlight">ALERT TYPES</span> </h3>
            <div class="sub-title">From simple price alerts to advanced  Percentage Change or Volume Change alerts</div>
            <p>Most bitcoin alert services only offer alerts based on price changes. Coindera lets you create much more powerful alerts based on criteria such as trading spikes, percentage increase/decrease, volume increase/decrease and more. Our simple and intuitive interface makes creating alerts is fast and easy.</p>
          </article>
        </div>
        <hr class="clearfix">
        <div class="col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
          <a href="https://coindera.com/markets.php"><img src="/assets/img/features/supported-markets.jpg" class="img-responsive" alt="process 3"></a>
        </div>
        <div class="col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
          <br><br>
          <article>
            <h3><span class="highlight">MAJOR</span> MARKETS SUPPORTED</h3>
            <div class="sub-title">We support major <a href="https://coindera.com/markets.php">markets</a><a href="" data-modal-link="0"></a> and multiple types of cryptocurrency</div>
            <div>
              <div>
                <p>Need a free and easy-to-use way to get Bitcoin alerts? We got you covered. Are you an advanced trader who wants an alert if the price of LTC on BTC-e goes above 1000 coins per hour?  No problem! Become a Pro user and get access to advanced alert types. Coindera helps you understand what’s going on with the <a href="https://coindera.com/markets.php">markets</a> — and protect your investment.</p>
              </div>
            </div>
            <br>
            <p>&nbsp;</p>
          </article>
        </div>
      </div>
    </div>
  </section>
	
<section id="product" class="section inverted">
    <div class="container">
      <div class="section-header animated hiding" data-animation="fadeInDown">
        <h2>PRICING <span class="highlight">PLANS</span></h2>
        <div class="sub-heading">
          Sign up for our PRO account for advanced alert types. </div>
        </div>
        <div class="section-content row">
          <div class="col-sm-6">
            <div class="package-column animated hiding" data-animation="flipInY">
              <div class="package-title">FREE</div>
              <div class="package-price">
                <div class="price"><span class="currency">$</span>0</div>
                <div class="period">&nbsp;</div>
              </div>
              <div class="package-detail">
                <ul class="list-unstyled">
                  <li>5 Active Alerts</li>
                  <li>Price Point</li>
                  <li>Telegram, Email, <a style="color:#d5adc1;" href="#sms_modal" data-toggle="modal">SMS<sup>*</sup></a>, Push</li>
                  <li><?=NUM_CRYPTOCURRENCIES?> Cryptocurrencies</li>
                  <li><?=NUM_MARKETS?> Markets</li>
                  <li>No access to support</li>
                </ul>
                <a href="http://app.coindera.com/signup?plan=free" class="btn btn-secondary btn-block">Get started</a>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="package-column animated hiding" data-animation="flipInY" data-delay="500">
              <div class="package-title">PRO</div>
              <div class="package-price">
                <div class="price"><span class="currency">$</span>5</div>
                <div class="period">monthly</div>
              </div>
              <div class="package-detail">
                <ul class="list-unstyled">
                  <li>Unlimited Active Alerts</li>
                  <li>Price point, <a style="color:#d5adc1;" href="#percent_change" data-toggle="modal">Percent Change</a>, and Regular Updates</li>
                  <li>Telegram, Email, <a style="color:#d5adc1;" href="#sms_modal" data-toggle="modal">SMS<sup>*</sup></a>, Push</li>
                  <li><?=NUM_CRYPTOCURRENCIES?> Cryptocurrencies</li>
                  <li><?=NUM_MARKETS?> Markets</li>
                  <li>Limited access to support</li>
                </ul>
                <a href="http://app.coindera.com/signup?plan=pro" class="btn btn-secondary btn-block">Get started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>

  <!--<section id="newsletter" class="long-block light">
    <div class="container center">
      <div class="col-sm-12 col-lg-5">
        <article>
          <h2><strong>EMAIL</strong> UPDATES</h2>
          <p class="thin">No spam - just an occasional update about Coindera.</p>
        </article>
      </div>
      <div class="col-sm-12 col-lg-7">
        <form method="POST" action="//thesocialmediadistillery.us1.list-manage.com/subscribe/post?u=700094d71829d5d59103b16d8&amp;id=5829c2e777" accept-charset="UTF-8" class="form" id="coinderaSubscribe">
          <div class="form-group form-inline">
            <input class="form-control required" size="15" id="NewsletterName" placeholder="Your name" name="FNAME" type="text">
            <input class="form-control required" size="25" id="NewsletterEmail" placeholder="your@email.com" name="EMAIL" type="EMAIL">
            <input name="subscribe" type="submit" class="btn btn-default" value="SUBSCRIBE">
            <span id="response"></span>
          </div>
        </form>
      </div>
    </div>
  </section>-->

    <footer id="footer" class="footer light">
      <div class="container">
        <div class="footer-content row">
          <div class="col-sm-4">
            <div class="logo-wrapper">
              <img src="/assets/img/logo.png" alt="logo" />
            </div>
            <p>Coindera makes it easy to monitor <em>Bitcoin</em> and over <?=NUM_CRYPTOCURRENCIES?> cryptocurrencies. Get real-time alerts sent via Telegram, email, international SMS, and push notifications to your Android or iOS device.  Create <em>powerful alerts</em> using criteria not available through less advanced bitcoin alert services  — all through a beautifully designed user interface.</p>
          </div>
          <div class="col-sm-5 social-wrap">
            <div class="footer-title">Social Networks</div>
            <ul class="list-inline socials">
              <li><a href="https://facebook.com/coindera" target="_blank"><span class="icon icon-socialmedia-08"></span></a></li>
              <li><a href="https://twitter.com/coindera" target="_blank"><span class="icon icon-socialmedia-07"></span></a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <div class="footer-title">Contact Us</div>
            <ul class="list-unstyled">
              <li>
                <span class="icon icon-chat-messages-14"></span>
                <a href="mailto:info@coindera.com">info@coindera.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright"> Coindera <?PHP echo date('Y')?>. All rights reserved.</div>
    </footer>
<!-- sms modal -->
<div class="modal fade" id="sms_modal" tabindex="-1" role="dialog" aria-labelledby="sms_modal_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="sms_modal_label">SMS</h4>
      </div>
      <div class="modal-body">
      SMS credits can be purchased in packs of 100 for $2.00 USD
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- % change Modal -->
<div class="modal fade" id="percent_change" tabindex="-1" role="dialog" aria-labelledby="percent_change_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="percent_change_label">Percent Change</h4>
      </div>
      <div class="modal-body">
       <img src="/assets/img/percent_change.png" alt="percent change details" width="550">
       <img src="/assets/img/time_frame.png" alt="percent change time details">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>
  <!--[if lt IE 9]>
    <script type="text/javascript" src="/assets/js/jquery-1.11.0.min.js?ver=1"></script>
  <![endif]-->
  <!--[if (gte IE 9) | (!IE)]><!-->
  <script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js?ver=1"></script>
  <!--<![endif]-->

  <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.nav.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.appear.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.plugin.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.countdown.js"></script>
  <script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
  <script type="text/javascript" src="/assets/js/waypoints-sticky.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.validate.js"></script>
  <script type="text/javascript" src="/assets/js/toastr.min.js"></script>
  <script type="text/javascript" src="/assets/js/headhesive.min.js"></script>
  <script type="text/javascript" src="/assets/js/scripts.js"></script>
  <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
  <script type="text/javascript">
  twttr.conversion.trackPid('l4oo2');
  $(document).ready(function() {

  if(window.location.href.indexOf('#percent_change') != -1) {
    $('#percent_change').modal('show');
  }

});

  </script>
  <noscript>
  <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l4oo2&p_id=Twitter" />
  <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l4oo2&p_id=Twitter" />
  </noscript>
</body>
</html>
