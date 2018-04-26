<?php include "portal-config.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8"/>
  <meta name="robots" content="noindex,nofollow"/>
  <script src="http://use.fontawesome.com/6a71565c22.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/portal.css">
  <link rel="stylesheet" type="text/css" href="css/forms.css">
</head>

<body>
  <!-- Start Wrapper -->
  <div class="wrapper">

    <header>
      <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i>Ben Judas SCC Web 120 Web Portal</a></h1>
      <nav>
        <ul class="topnav" id="myTopnav">
          <?=makeLInks($nav1)?>
<!--           <li><a href="index.php" class="selected">Welcome</a></li>
          <li><a href="big/index.php">Big</a></li>
          <li><a href="aia.php">AIA</a></li>
          <li><a href="flowchart.php">Flowchart</a></li>
          <li><a href="fp/index.php">Final Project</a></li>
          <li><a href="contactme.php">Contact Ben</a></li> -->
          <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
        </ul>
      </nav>
    </header>

        <section>
      <h2 class="pageID"><?=$PageID?></h2>
  