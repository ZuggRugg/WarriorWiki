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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/main-page.css" media="screen" />
    <title>WIKI Site</title>
    <link rel="icon" type="img/png" href="../img/icon.png"> 
</head>

<html>
<body>
 
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
</div> <br>

<!-- login to database -->
<p>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=project", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
  catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();}
  $username = $_SESSION['username'];
?> 
</p>


<div id='tempcontent'>
</br> 
<h1>WIKI SITE</h1>
<p> This is the  website for my CS 234 class it will include a wiki administered through an SQL database</p>
<p>This will be primarily a school focused wiki with todos and ascossiated pages for studying and note-taking</p>


<!-- TODO list -->
<h2>TODO</h2>
<div id='todo'>
   <ul class='centerList'>
	<li>##DONE##  homogenize CSS across web-pages to give same look</li>
	<li>##DONE## add login and register Backend for the MySql Database</li>
	<li>##DONE## Store article contents in Mysql or in .txt file your choice</li>
	<li>##IN-PROGRESS## have Admin page to enter article, update, delete </li>
   </ul>
</div>
<br> 

<h2>Features I want</h2>
<div id='todo'>
   <ul class='centerList'>
     <li>Markdown langauge parser for easy writing viewing</li>
     <li>CRUD operations, (create pages, write to pages, delete pages)</li>
     <li>The entire page will be centered and have images will only be a certain size for conformity</li>
   </ul>
</div>

       
<!-- Links for Tutorials -->
<h3>Database Layout and Wikipedia Documentation</h3>
	<a href="https://www.mediawiki.org/wiki/Manual:Database_layout"> MediaWiki Database layout </a> <br> <br>
	<a href="https://stackoverflow.com/questions/3900791/good-tutorial-on-how-to-build-a-wiki-with-php-mysql"> Great writeup on what would need to be done</a> <br> <br>
	<a href="https://www.honeybadger.io/blog/php-markdown/"> Impement markdown language </a>
</div>


<!-- Footer -->
<footer>
	<small>Made by Shayne Tieman :D</small>
</footer>

<script></script>
</body>
</html>


