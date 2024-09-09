<?PHP
//Database configuration
$host = 'coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com';
$username = 'adamevers';
$password = 'HxiCC*HExe}ZHDdykZw9PAULZK98eG';


switch (ENVIRONMENT) {
	case 'app':
			$conn = mysqli_init();
			mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'coindera_prod', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn->error);
			
			$conn_markets = mysqli_init();
			mysqli_options($conn_markets, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn_markets->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn_markets->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'markets', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn_markets->error);

			//Installing new pdo function
			try {
				$pdo = new PDO("mysql:host=$host;dbname=coindera_prod;port=3306", $username, $password, array(
					    PDO::MYSQL_ATTR_SSL_CA  => '/var/www/rds-combined-ca-bundle.pem',
					    PDO::ATTR_PERSISTENT => true)
				);
			} catch (PDOException $e) {
				app_error($e->getMessage(), $_SERVER['PHP_SELF'], 'pdo connection');
			    notify('501 - Database not found', 'danger', '/');
			}
		
		break;
	case 'dev':
			$conn = mysqli_init();
			mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'coindera_dev', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn->error);
			
			$conn_markets = mysqli_init();
			mysqli_options($conn_markets, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn_markets->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn_markets->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'markets', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn_markets->error);
			
			//Installing new pdo function
			try {
				$pdo = new PDO("mysql:host=$host;dbname=coindera_dev;port=3306", $username, $password, array(
					    PDO::MYSQL_ATTR_SSL_CA  => '/var/www/rds-combined-ca-bundle.pem',
					    PDO::ATTR_PERSISTENT => true)
				);
			} catch (PDOException $e) {
				app_error($e->getMessage(), $_SERVER['PHP_SELF'], 'pdo connection');
			    notify('501 - Database not found', 'danger', '/');
			}
		break;
	case 'alpha':
			$conn = mysqli_init();
			mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'coindera_dev', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn->error);
			
			$conn_markets = mysqli_init();
			mysqli_options($conn_markets, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn_markets->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn_markets->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'markets', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn_markets->error);
			
			//Installing new pdo function
			try {
				$pdo = new PDO("mysql:host=$host;dbname=coindera_dev;port=3306", $username, $password, array(
					    PDO::MYSQL_ATTR_SSL_CA  => '/var/www/rds-combined-ca-bundle.pem',
					    PDO::ATTR_PERSISTENT => true)
				);
			} catch (PDOException $e) {
				app_error($e->getMessage(), $_SERVER['PHP_SELF'], 'pdo connection');
			    notify('501 - Database not found', 'danger', '/');
			}
		break;

	case 'api':
			$conn = mysqli_init();
			mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'coindera_prod', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn->error);
		
			//Installing new pdo function
			try {
				$pdo = new PDO("mysql:host=$host;dbname=coindera_prod;port=3306", $username, $password, array(
					    PDO::MYSQL_ATTR_SSL_CA  => '/var/www/rds-combined-ca-bundle.pem',
					    PDO::ATTR_PERSISTENT => true)
				);
			} catch (PDOException $e) {
				app_error($e->getMessage(), $_SERVER['PHP_SELF'], 'pdo connection');
			    notify('501 - Database not found', 'danger', '/');
			}

		break;
	case 'cli':
			$conn = mysqli_init();
			mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
			$conn->ssl_set(NULL, NULL, '/var/www/rds-combined-ca-bundle.pem', NULL, NULL);
			$conn->real_connect('coindera.c5klzlkygor5.us-east-1.rds.amazonaws.com', 'adamevers', 'HxiCC*HExe}ZHDdykZw9PAULZK98eG', 'coindera_prod', 3306, NULL, MYSQLI_CLIENT_SSL) or die($conn->error);
		
			//Installing new pdo function
			try {
				$pdo = new PDO("mysql:host=$host;dbname=coindera_prod;port=3306", $username, $password, array(
					    PDO::MYSQL_ATTR_SSL_CA  => '/var/www/rds-combined-ca-bundle.pem',
					    PDO::ATTR_PERSISTENT => true)
				);
			} catch (PDOException $e) {
				app_error($e->getMessage(), $_SERVER['PHP_SELF'], 'pdo connection');
			    notify('501 - Database not found', 'danger', '/');
			}
		break;
}
?>