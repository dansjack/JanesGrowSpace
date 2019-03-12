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
$meta_description = "";
$meta_keywords = "";
$plants_css = "";
$contact_form_css = "";

switch(THIS_PAGE){

    case 'index.php':
        $title = 'Welcome to Jane\'s Grow Space';
        break;

    case 'contact.php':
        $title = 'Contact Me - Jane\'s Grow Space';
        $contact_form_css = '<link rel="stylesheet" href="css/form.css" />' . "\n";
        break;

    case 'resources.php':
        $title = 'Resources - Jane\'s Grow Space';
        break;

    case 'plants.php':
        $title = 'Plants - Jane\'s Grow Space';
        $plants_css = '<link rel="stylesheet" href="css/plants.css" />' . "\n";
        break;
}

//place URL & labels in the array here for navigation:
$nav_top['index.php'] = "Home";
$nav_top['plants/plants.php'] = "Plants";
$nav_top['resources.php'] = "Resources";
$nav_top['contact.php'] = "Contact";

/*
makeLinks function will create dynamic nav when called.
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<a class="selected" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
        }else{
            $myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
        }
    }

    return $myReturn;
}
?>