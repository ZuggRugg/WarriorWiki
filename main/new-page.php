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
    <link rel="stylesheet" type="text/css" href="../CSS/new-page.css" media="screen" />
    <title>WIKI Site</title>
    <link rel="icon" type="img/png" href="../img/icon.png">
</head>
    
<!-- Header/Navigation Bar -->
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
</div> <br> <br>


<!-- main content -->
<h1>Create New Article</h1>
<p>create a new article here</p> <br>

  <form action="create-page.php" method="post">
  <label for="title">title</label>
  <input type="text" id="title-name" name="title-name"><br><br>
  <label for="article-contents">article-contents</label>
  <input type ="text" id="article-contents" name="article-contents"> <br>
  <input type="submit" value="Submit" id="submit">
</form> 



<footer>Made by Shayne Tieman</footer>

</body>
</html>



