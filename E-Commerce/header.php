<?php
error_reporting(0);
session_start();
$username = $_SESSION['uname'];
?>
<!DOCTYPE html>

<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styling.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">E-Commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

        <a class="nav-link" href="index.php">Home |
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact |</a>
      </li>
      <?php
      if($username == false)
      {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login |</a>
      </li>
      <?php
      }
      else
      {
       ?>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout |</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="viewCart.php">Cart |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="invoice.php">Orders </a>
      </li>
      <?php 
      }
      ?>
      <li class="nav-item"style="float:right;">
        <a class="nav-link" ><?php  $username;?> </a>
      </li>
       
    </ul>
  </div>
</nav>
