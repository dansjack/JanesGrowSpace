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
        $title = 'Dan\'s Home Page!';
        $logo = "fa-home";
        break;

    case 'contactme.php':
        $title = 'Dan\'s Contact Page!';
        $logo = "fas fa-envelope";
        break;

    case 'big/index.php':
        $title = 'WEB120 Portal - Big';
        $logo = "fa-home";
        break;

    case 'aia.php':
        $title = 'WEB120 Portal - AIA';
        $logo = "fas fa-list";
        break;

    case 'flowchart.php':
        $title = 'WEB120 Portal - Flowchart';
        $logo = "fa-home";
        break;

    case 'fp/index.php':
        $title = 'WEB120 Portal - Final Project';
        $logo = "fas fa-handshake";
        break;
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Dan";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }
    }

    return $myReturn;
}


?>