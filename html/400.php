<!DOCTYPE html>
<html>
    <head>
        <title>400 Error - Bad Request</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style type="text/css">
            body { text-align: center; padding: 10%; font: 20px Helvetica, sans-serif; color: #333; }
            h1 { font-size: 50px; margin: 0; }
            article { display: block; text-align: center; max-width: 800px; margin: 0 auto; }
			img { margin: auto;}
            a { color: #dc8100; text-decoration: none; }
            a:hover { color: #333; text-decoration: none; }
            @media only screen and (max-width : 480px) {
                h1 { font-size: 40px; }
            }
        </style>
       	<script type="text/javascript">
		var count = 11;
		var redirect = "https://coindera.com/";

		function countDown(){
			var timer = document.getElementById("timer");
			if(count > 0){
				count--;
				timer.innerHTML = "This page will redirect in "+count+" seconds.";
				setTimeout("countDown()", 1000);
			}else{
				window.location.href = redirect;
			}
		}
		</script>
    </head>
    <body>
        <article>
            <img src="https://app.coindera.com/assets/images/logo.png" width="50px" height="50px"/>
            <h1>Oops, sorry!</h1>
            <p>400 Error - Bad Request </p>
            <p>
            	<span id="timer">
				<script type="text/javascript">countDown();</script>
				</span>
          	</p>
            <p><a href="mailto:support@coindera.com">Email</a> | <a href="https://facebook.com/coindera/">Facebook</a> | <a href="https://twitter.com/coindera/">Twitter</a></p>
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