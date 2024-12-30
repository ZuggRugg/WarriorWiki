<?php

ini_set('display_errors', 1); error_reporting(-1);

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

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title-name'];
    $article = $_POST['article-contents'];
    insert_contents($title, $article);
    header('location: Wiki-Home.php');
}

function insert_contents($title, $article) {
    global $conn;
    $sql = "INSERT INTO articles (article_id, article_title, article_content, tags) VALUES (NULL, :title, :contents, 'test')";
    $statement = $conn->prepare($sql);

    $statement->bindParam(":title", $title);
    $statement->bindParam(":contents", $article);

    $statement->execute();

    

}

?>
