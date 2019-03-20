<!DOCTYPE html>
<html lang="en">
<head onLoad="MyReload()">
  <title><?=$title?></title>
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="noindex,nofollow" />
  <!--  @todo: add meta description & keywords-->
  <meta charset="utf-8">
  <?php echo $norm_css; ?>
  <?php echo $grid_css; ?>
  <?php echo $nav_css; ?>
  <?php echo $fp_css; ?>
  <?php echo $contact_form_css; ?>
  <?php echo $plants_css; ?>
  <script <?php echo $jquery; ?>></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates%7CUbuntu%7COswald" rel="stylesheet">
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
  <div class="section group hdr-bg-img" id="hdr-bg-img">
    <header class="col span_6_of_6 header header-bg-img" id="header">
      <a <?php echo $home; ?>><h1 id="banner-heading">Jane's Grow Space</h1></a>
      <nav id="navbar" class="navbar navbar-scroll-color"> <!-- + class="sticky" onScroll-->
          <?=makeLinks($nav)?>
        <a href="#shopping_cart"><span><img id="cart-icon" <?php echo $cart_icon; ?> alt="Shopping Cart"></span></a>
        <!--Icons made by Stephen Hutchings from "https://www.flaticon.com/authors/stephen-hutchings" is licensed
         by Creative Commons BY 3.0"-->
        <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">☰</a>
      </nav>
      <p id="content-start"></p>
    </header>
  </div>
    <!--  end header file here -->