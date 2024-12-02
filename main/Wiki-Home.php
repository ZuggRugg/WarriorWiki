<?php
session_start();

 if (!isset($_SESSION['username'])) {
     header('location: login-form.php');
 }
   
 if (isset($_GET['logout'])) {
     $_GET["logout.php"];
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/Wiki-Home.css" media="screen" />
    <title>WIKI Site</title>
    <link rel="icon" type="img/png" href="../img/icon.png">
</head>

<html>
<body>
    

<!-- NAVBAR -->
<div id='navborder'> 
   <div id='main_navbar'>
      <img src="../img/icon.png" alt="logo" width="40" height="40">
      <a href="main-page.php">Home</a>
      <a href="Wiki-Home.php">Wiki</a>
      <a href="new-page.php">New Page</a>
   </div>

     <div id='login'>
         <a href="login-form.php">Login</a>
         <small>|</small>
	  <a href="register-form.php">Register</a>
     <small>|</small>
     <a href="logout.php">Log Out</a>
    </div> 
</div> 


<!--  TODO LIST  -->
<br><br>

<!-- general ideas -->
<h1>Wiki-Homepage</h1>
<p>this page would store all the main articles for the wiki</p>
<p>maybe one day include a fancy search function to find articles in the wiki</p>
<p>display already created articles and push link onto page for newly created page in the database </p>
<p>button for admin users to delete articles from this page and edit from this page</p>


<!-- Footer -->
<footer>
<small>Made by Shayne Tieman</small>
</footer>

</body>
</html>

