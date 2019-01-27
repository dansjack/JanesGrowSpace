<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB120 Portal - Final Project</title>
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="noindex,nofollow" />
  <meta charset="utf-8">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="../css/nav.css" />
  <link rel="stylesheet" href="../css/portal.css" />
  <link rel="stylesheet" href="../css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
  <header>
    <h1><a href="index.php"><i class="logo fa fa-home"></i> Dan Jack SCC WEB120 Portal</a></h1>
    <nav>
      <ul class="topnav" id="myTopnav">
        <li><a href="../index.php">Welcome</a></li>
        <li><a href="../big/index.php">Big</a></li>
        <li><a href="../aia.php">AIA</a></li>
        <li><a href="../flowchart.php">Flowchart</a></li>
        <li><a href="../fp/index.php" class="selected">Final Project</a></li>
        <li><a href="../contactme.php">Contact Dan</a></li>
        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
      </ul>
    </nav>
  </header>
<!-- START LEFT COL -->
<section>
  <h2 class="pageID">Welcome</h2>

  <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
  <img src="images/desktop.jpg" class="desktop" alt="" />
  <img src="images/phone.jpg" class="phone" alt="" />
  <p>Lorem Ipsum place holder text goes here for now</p>
  <p>Lorem Ipsum place holder text goes here for now</p>
  <p>Lorem Ipsum place holder text goes here for now</p>
  <p>Lorem Ipsum place holder text goes here for now</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
  <h3>Right Column</h3>
  <img src="images/tablet.jpg" class="tablet" alt="" />
  <p>Lorem Ipsum place holder text goes here for now</p>
  <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->

<!-- START Footer -->
<?php include '../includes/footer.php';?>
