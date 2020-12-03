<?php
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dashboard</title>
</head>
<body>
<header>
    <nav>
      <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    </nav> 
  </header>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>