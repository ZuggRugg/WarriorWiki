<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function all_articles() {
    global $pdo;
    $sql = "SELECT article_title FROM articles";
    $statement = $pdo->prepare($sql);
    $statement->execute();
  
    $results = $statement->fetchAll();

             echo "<p>";
             $length = count($results);
             for ($i = 0; $i < $length; $i++) {
               $initial = implode(" ", $results[$i]);
               $testlength = count($results[$i]);
               $initial = substr($initial, $testlength + 4);
               echo "<br> <br>  $initial";
     }
             echo "</p>";
}

        try {
            $pdo = new PDO("mysql:host=localhost;dbname=project", "root", "root");
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
        catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();}

all_articles();
?>
