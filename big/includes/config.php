<?php
/**
 * config.php provides a place to store configuration info,
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php
 * @see recaptchalib.php
 * @see util.js
 * @todo none
 */

include 'credentials.php';

//echo basename($_SERVER['PHP_SELF']);

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent data errors
date_default_timezone_set('America/Los_Angeles');


//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
        $title = 'Dan\'s Big Home Page!';
        $logo = "fa-home";
        break;

    case 'contactme.php':
        $title = 'Dan\'s Contact Page!';
        $logo = "fas fa-envelope";
        break;
}


?>