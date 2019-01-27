<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/table.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Special+Elite'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Ubuntu'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Libre+Baskerville'>
    <style>
      h1, h2, h3, p, td, tr, th {
        font-family: 'Ubuntu', sans-serif;
      }

      input:required, input:optional, textarea:optional, label {
        font-family: 'Special Elite', sans-serif;
      }

      .topnav {
        font-family: 'Libre Baskerville', sans-serif;
      }
    </style>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Dan Jack SCC WEB120 Portal</a></h1>
    <nav>
        <ul class="topnav" id="myTopnav">
          <?=makeLinks($nav1)?>
          <!-- START NAV
          <li><a href="big/index.php">Big</a></li>
          <li><a href="aia.php">AIA</a></li>
          <li><a href="flowchart.php">Flowchart</a></li>
          <li><a href="fp/index.php">Final Project</a></li>
          <li><a href="contactme.php">Contact Dan</a></li>
          END NAV -->
            <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
    </nav>
</header>