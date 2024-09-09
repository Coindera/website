<?PHP
//Application configuration
//Turn on dev to pro move.
//header('Location: https://coindera.com/maintenance.php');

//Define the site
define('BASE_URL', 'https://'.ENVIRONMENT_PATH.'.coindera.com/');
define('BASE_PATH', '/var/www/html/');
define('BASE_DIR', '/var/www/');
define('APP_ERROR_SET', ENVIRONMENT_PATH);
define('DB_PATH', '/var/www/config/db.php');
define('API_PATH', 'https://app.coindera.com/');

//Define SQL statements
define('SQL_MARKETS',"SELECT DISTINCT market FROM markets WHERE is_active = '1' ORDER BY 1 ASC");
define('SQL_CURRENCIES',"SELECT DISTINCT currency FROM markets WHERE is_active = '1' ORDER BY 1 ASC");

//Define Versions
define('CSS_MAIN_VERSION', '2.2');
define('CSS_STYLE_VERSION', '2.2');
define('MARKETS_VERSION', '3');
	
//Set cookie - MUST be called before session_start();
session_set_cookie_params('10800', '/', BASE_URL, TRUE);
session_start();

//Load configurations
require_once 'credentials.php';
require_once 'plans.php';
require_once '/var/www/functions/main.php';
require_once 'variables.php';

//Load vendor + custom classes
require_once '/var/www/vendor/autoload.php';
require_once '/var/www/lib/class.ip.php';
require_once '/var/www/lib/class.template.php';
require_once '/var/www/lib/class.pushover.php';
include '/var/www/lib/class.mailchimp.php';
?>