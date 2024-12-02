<?php

ini_set('display_errors', 1); error_reporting(-1);

session_start();
$servername = "localhost";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=main", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
  catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();}
  $username = $_SESSION['username'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $article = $_POST['article-contents'];
}

function insert_contents($title, $article) {
    global $conn;
    $sql = "INSERT INTO article (article_id, article_title, article_contents, tags) VALUES (NULL, :title, :contents, NULL)"
    $statement = $conn->prepare($sql);

    $statement->bindParam(":title", $title);
    $statement->bindParam(":article", $article);

    $statement->execute();
}

function create_page() {
}

insert_contents($title, $article);


?>
