<?PHP
use Respect\Validation\Validator as v;

//Email
$v_email_categories = v::notEmpty()->alnum('_')->in($email_categories)->setName('Email category');
$v_email_token = v::notEmpty()->alnum()->setName('Email token');
?>