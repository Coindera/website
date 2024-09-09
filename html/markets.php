<?PHP
define('ENVIRONMENT', 'app');
require_once '/var/www/config/db.php';
$markets_result = $conn->query("SELECT *  FROM markets_new WHERE `is_active` = '1' ORDER BY 1 ASC");
$markets = $markets_result->fetch_all(MYSQLI_ASSOC);
function metrics($var){
  if($var == 1){ echo '<i class="fa fa-circle text-success"></i>';} else { echo '<i class="fa fa-circle text-danger"></i>';};
}
?>
<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Coindera - Supported Markets</title>
	<meta name="description" content="Coindera">
	<meta name="keywords" content="Coindera Supported Markets">
  	<link href="/assets/img/coindera.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
  	<link href="/assets/img/coindera.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
  	<link href="/assets/img/coindera.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
  	<link href="/assets/img/coindera.57x57.png" rel="apple-touch-icon" type="image/png">
  	<link href="/assets/img/favicon.png" rel="icon" type="image/png">
  	<link rel="shortcut icon" href="/assets/img/favicon.ico">
    
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css" media="all" />
  	<link rel="stylesheet" href="/assets/css/font-lineicons.css" type="text/css" media="all" />
  	<link rel="stylesheet" href="/assets/css/market_bootstrap.css" type="text/css" media="all" />
  	<link rel="stylesheet" href="/assets/css/market_style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/bootstrap-responsive.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-52851137-1', 'auto');
    ga('send', 'pageview');
  	</script>
</head>

<body>

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


  <section class="container-fluid supported-container">
  <div class="col-xs-12 text-center">
    <h1 class="title-heading">Supported Markets</h1>
  </div>
  <div class="col-12 supported-market-listing">
    <ul class="list-group">
      <?PHP foreach($markets as $value){
        echo "<li><a href=\"";
        echo "#".strtoupper($value['name']);
        echo "\">";
        echo strtoupper($value['name']);
        echo "</a></li>";
      };?>
    </ul>
  </div>
</section>
<?PHP
foreach($markets as $value){
?>
<section class="container-fluid market-container">
  <a name="<?PHP echo strtoupper($value['name']); ?>"></a>
  <h2 class="title"><?PHP echo strtoupper($value['name']); ?></h2>
  <p>Buy - <?PHP metrics($value['buy']) ?> | Sell - <?PHP metrics($value['sell']) ?> | Average - <?PHP metrics($value['average']) ?> | High - <?PHP metrics($value['high']) ?> | Low - <?PHP metrics($value['low']) ?> | Volume - <?PHP metrics($value['volume']) ?> | Volume Notes - <?PHP if(is_null($value['volume_notes']) == TRUE){ echo '<i class="fa fa-circle text-danger"></i>';} else { echo $value['volume_notes'];} ?></p>
</section>
<section class="container-fluid table-container">
  <div class="table-outer">
<?PHP
$upper_market = strtoupper($value['db_name']);
$get_currency = $conn->query("SELECT currency FROM markets WHERE market = '$upper_market' AND is_active = '1' ORDER BY 1 ASC");
$currencies = $get_currency->fetch_all(MYSQLI_ASSOC);
$count = 0;
foreach($currencies as $value){
if($count == 0){
  echo "<div class=\"row\">";
}elseif($count == 12){
echo "</div>";
        echo "<div class=\"row\">";
$exit = TRUE;
$count = 0;
}
echo "<div>".$value['currency']."</div>";
$count++;
}; 
echo "</div>";
echo "</section>";
};
?>
		
	</div>
    <div class="back-top-bottom"><a href="javascript:;" class="back-to-top"><img src="/assets/img/back-top-arrow.png" alt="Back-top-arrow" /></a></div>
	 <footer id="footer" class="footer light">
      <div class="container">
        <div class="footer-content row">
          <div class="col-sm-4">
            <div class="logo-wrapper">
              <img src="/assets/img/logo.png" alt="logo" />
            </div>
            <p>Coindera makes it easy to monitor <em>Bitcoin</em> and over five hundred cryptocurrencies. Get real-time alerts sent via email, international SMS, and push notifications to your Android or iOS device.  Create <em>powerful alerts</em> using criteria not available through less advanced bitcoin alert services  — all through a beautifully designed user interface.</p>
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
      <div class="copyright"> &copy; Coindera 2017. All rights reserved.</div>
    </footer>
	<!-- <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div> -->

	<!--[if lt IE 9]>
		<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js?ver=1"></script>
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
</body>
</html>
