<?PHP
header("HTTP/1.1 503 Service Unavailable");
header("Status: 503 Service Unavailable");
header("Retry-After: 3600");
include '/var/www/config.php';
if(maintenance == 'no'){
	header('https://app.coindera.com');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Coindera is down for maintenance</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style type="text/css">
            body { text-align: center; padding: 10%; font: 20px Helvetica, sans-serif; color: #333; }
            h1 { font-size: 50px; margin: 0; }
            article { display: block; text-align: left; max-width: 800px; margin: 0 auto; }
			img { margin: auto;}
            a { color: #dc8100; text-decoration: none; }
            a:hover { color: #333; text-decoration: none; }
            @media only screen and (max-width : 480px) {
                h1 { font-size: 40px; }
            }
        </style>
    </head>
    <body>
        <article>
            <img src="https://coindera.com/assets/img/coindera.57x57.png"/>
            <h1>Coindera is undergoing maintenance. We'll be back shortly.</h1>
            <p>Scheduled maintenance is currently in progress. Don't worry this does not impact alerts being sent out.</p>
            <p>We'll be back online as soon as possible.</p>
            <p>&mdash; <a href="mailto:support@coindera.com">Adam</a></p>
            <p><a href="https://facebook.com/coindera/">Facebook</a> | <a href="https://twitter.com/coindera/">Twitter</a></p>
        </article>
    </body>
</html>
<?PHP
if (isset($_COOKIE)) {
	$past = '1';
	foreach ( $_COOKIE as $key => $value ){
		setcookie( $key, $value, $past, '/', 'https://app.coindera.com/', 1);

	}
	session_start();
	session_destroy();
}
?>