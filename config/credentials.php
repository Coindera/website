<?PHP
//API Keys configuration

switch (ENVIRONMENT) {
	case 'app':
			define('STRIPE_SECRET', 'sk_live_HyW32oINmGlmeIiucq7eVcH8');
			define('STRIPE_PUBLIC', 'pk_live_xcGXnfiVrSIi2fOEMvKnqbej');
			define('STRIPE_ENDPOINT_SECRET', 'whsec_QB7pfzJEu0wAnxKlpd0hgS4wQhlB0TVt');
		break;
	case 'dev':
			define('STRIPE_SECRET', 'sk_test_RjHFyw6tdhLkDegy5em1G4Xu');
			define('STRIPE_PUBLIC', 'pk_test_rRFyxEGpnGrGyPoXN0jFdV1g');
			define('STRIPE_ENDPOINT_SECRET', 'whsec_QB7pfzJEu0wAnxKlpd0hgS4wQhlB0TVt');
		break;
	case 'alpha':
			define('STRIPE_SECRET', 'sk_test_RjHFyw6tdhLkDegy5em1G4Xu');
			define('STRIPE_PUBLIC', 'pk_test_rRFyxEGpnGrGyPoXN0jFdV1g');
			define('STRIPE_ENDPOINT_SECRET', 'whsec_QB7pfzJEu0wAnxKlpd0hgS4wQhlB0TVt');
		break;
	case 'api':

		break;
	case 'cli':
			define('STRIPE_SECRET', 'sk_live_HyW32oINmGlmeIiucq7eVcH8');
			define('STRIPE_PUBLIC', 'pk_live_xcGXnfiVrSIi2fOEMvKnqbej');
			define('STRIPE_ENDPOINT_SECRET', 'whsec_QB7pfzJEu0wAnxKlpd0hgS4wQhlB0TVt');
		break;
}

//Sendgrid
define('SENDGRID_API_KEY', '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');
//Twilio
define('TWILIO_SID', 'AC711a1767849d75d6c28ee105f84cbd6e');
define('TWILIO_TOKEN', '07c32b4e73bb8730be56ef79bfa522ec');
define('TWILIO_FROM', 'MG21a05a15a17981bde323a44b46d842b4');
//Pushover
define('PUSHOVER_TOKEN', 'ai3QYtUgVBTYXga6grTGVEgrtR31o6');
//Google Captcha
define('RECAPTCHA_SECRET', '6Ld2ARAUAAAAAJBzWEHi6rYx4cvfcUG1x8bbHJif');
//Blockchain
define('BLOCKCHAIN_XPUB', 'xpub6BnHFB5a9fuEvSTVPcGyeFUMcAip5mf8uDN7Z62DZdmzNp9gbyVR5UFqhd6R88Uaf2ioUm8mJWVtuAmN1WvWknm9azpemU5RtTqEbULUjBD');
define('BLOCKCHAIN_API_KEY', '8f2ae8e4-f322-4642-b4da-9040d4107d0c');
?>