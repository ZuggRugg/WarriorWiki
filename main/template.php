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
<html lang="en-us">

<head>
  <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/main-page.css" media="screen" />
    <title>WIKI Site</title>
    <link rel="icon" type="img/png" href="../img/icon.png"> 
</head>

<html>
<body>

<style>
body {background-color: #f9ecdf;font-size: 20px;  font-family: monospace;}
#navborder {position: fixed;margin-left: -8px;padding: 10px;top: -1px;width: 100%;align-items: center;background-color: #3d3d3d;justify-content: space-between;border-bottom: 1px solid black;border-top: 1px solid black;z-index: 1;}
footer {background-color: #3d3d3d;color: white;text-align: center;padding: 12px;font-family: monospace;font-weight: 300;position: fixed;margin-top: 250px;left: 0; flex-grow: 1; width: 100%; top: 630px;}
</style>

<!-- Header/Navigation Bar -->
<div id='navborder'>
   <div id='main_navbar'>
        <img src="../img/icon.png" alt="logo" width="40" height="40"> 
        <a href="main-page.php">Home</a>
        <a href="Wiki-Home.php">Wiki</a>
        <a href="new-page.php">New-Page</a>
   </div>

     <div id='login'>
         <a href="login-form.php">Login</a>
         <small>|</small>
	  <a href="register-form.php">Register</a>
	  <small>|</small>
	  <a href="logout.php">Log Out</a>
    </div> 
</div> <br> <br>

<p>template or php text here</p>
<button onclick="edit-page.php">Edit Page</button>

<!-- Footer -->
<footer>
	<small>Footer text goes here :D</small>
</footer>

<script></script>
</body>
</html>
