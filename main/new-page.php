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
<html lang="en-US">

<head>
  <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/about.css" media="screen" />
    <title>WIKI Site</title>
    <link rel="icon" type="img/png" href="../img/icon.png">
</head>
    
<!-- Header/Navigation Bar -->
<div id='navborder'>
   <div id='main_navbar'>
      <img src="../img/icon.png" alt="logo" width="40" height="40"> 
      <a href="main-page.php">Home</a>
      <a href="Wiki-Home.php">Wiki</a>
      <a href="about.php">About</a>
   </div>

   <div id='login'>
     <a href="login-form.php">Login</a>
     <small>|</small>
     <a href="register-form.php">Register</a>
     <small>|</small>
     <a href="logout.php">Log Out</a>
   </div> 
</div> <br> <br>


<!-- main content -->
<h1>Create New Article</h1>
<p>create a new article here</p> <br>

 <form action="create-page.php">
  <label for="title">Title</label>
  <input type="text" id="title-name" name="title-name"><br><br>
  <label for="article-contents">article-contents</label>
  <textarea rows="5" cols="80" id="article"></textarea>
  <input type="submit" value="Submit">
</form> 







<footer>it work :D </footer>

</body>
</html>



