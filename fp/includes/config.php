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


//get URL and compare to array of top level URLs
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$top_urls = array('danjack.dreamhosters.com/web120/fp/index.php', 'danjack.dreamhosters.com/web120/fp/resources.php',
    'danjack.dreamhosters.com/web120/fp/contact.php');

if (in_array($url, $top_urls) ) { // If at top level, use these elements & vars
    // Nav links
    $nav['index.php'] = "Home";
    $nav['plants/plants.php'] = "Plants";
    $nav['resources.php'] = "Resources";
    $nav['contact.php'] = "Contact";
    $cart_icon = 'src="images/icons/shopping-cart.svg"';

    // CSS and scripts
    $js = 'src="js/script.js"';
    $grid_css = '<link rel="stylesheet" href="css/grid.css" />' . "\n";
    $nav_css = '<link rel="stylesheet" href="css/nav.css" />' . "\n";
    $fp_css = '<link rel="stylesheet" href="css/fp.css" />' . "\n";
//    Normalize currenttly causes more problems than it solves. Will rework later
    $norm_css = '<link rel="stylesheet" href="css/normalize.css"/>' . "\n";



    // Header background & Footer links
    $home = 'href="index.php"';
    $footer_contact = 'href="contact.php"';
    $ig_icon = 'src="images/icons/ig.svg"';
    $email_icon = 'src="images/icons/envelope.svg"';

} else { // If at plant level, use these instead
    // Nav links
    $nav['../index.php'] = "Home";
    $nav['plants.php'] = "Plants";
    $nav['../resources.php'] = "Resources";
    $nav['../contact.php'] = "Contact";
    $cart_icon = 'src="../images/icons/shopping-cart.svg"';

    // CSS and scripts
    $js = 'src="../js/script.js"';
    $grid_css = '<link rel="stylesheet" href="../css/grid.css" />' . "\n";
    $nav_css = '<link rel="stylesheet" href="../css/nav.css" />' . "\n";
    $fp_css = '<link rel="stylesheet" href="../css/fp.css" />' . "\n";
    $norm_css = '<link rel="stylesheet" href="../css/normalize.css"/>' . "\n";

    // Footer links
    $home = 'href="../index.php"';
    $footer_contact = 'href="../contact.php"';
    $ig_icon = 'src="../images/icons/ig.svg"';
    $email_icon = 'src="../images/icons/envelope.svg"';
}



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
        $plants_css = '<link rel="stylesheet" href="../css/plants.css" />' . "\n";
        break;

    case 'chinese_money_plant.php':
        $title = 'Chinese Money Plant - Jane\'s Grow Space';
        break;
}




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