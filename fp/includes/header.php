<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$title?></title>
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="noindex,nofollow" />
  <!--  @todo: add meta description & keywords-->
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/fp.css" />
  <?php echo $contact_form_css; ?>
  <?php echo $plants_css; ?>
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates%7CUbuntu%7COswald" rel="stylesheet">
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
  <div class="section group hdr-bg-img" id="hdr-bg-img">
    <header class="col span_6_of_6 header header-bg-img" id="header">
      <a href="index.php"><h1 id="banner-heading">Jane's Grow Space</h1></a>
      <nav id="navbar" class="navbar navbar-scroll-color"> <!-- + class="sticky" onScroll-->
          <?=makeLinks($nav_top)?>
<!--        <a href="index.php"><span>Home</span></a>-->
<!--        <a href="plants.php"><span>Plants</span></a>-->
<!--        <a href="resources.php"><span>Resources</span></a>-->
<!--        <a href="contact.php"><span>Contact</span></a>-->
        <a href="#shopping_cart"><span><img id="cart-icon" src="images/icons/shopping-cart.svg" alt="Shopping Cart
          icon"></span></a>
        <!--Icons made by Stephen Hutchings from "https://www.flaticon.com/authors/stephen-hutchings" is licensed
         by Creative Commons BY 3.0"-->
        <a href="#" class="icon" onclick="responsiveNav()">☰</a>
      </nav>
      <p id="content-start"></p>
    </header>
  </div>
    <!--  end header file here -->