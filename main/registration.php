<?php

ini_set('display_errors', 1); error_reporting(-1);

function is_in_db($username, $password) {
    global $pdo;
    if(isset($username)) {
    $sql = "SELECT * from registration where username = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$username]);

    $check = $statement->fetch();
    if(!$check) {return "f";}
    else {return "t";}
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=project", "root", "root");
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();}


$check_db = is_in_db($username, $password);

if($check_db == "t") {echo "user is already in database, register use a different username";}

else if($check_db == "f") {
$sql = "INSERT into registration (id, username, password) VALUES (NULL, :username, :password)";
$statement = $pdo->prepare($sql);

$hashed_password = password_hash($password, PASSWORD_BCRYPT);
$statement->bindParam(':username', $username);
$statement->bindParam(':password', $hashed_password);

$statement->execute();

session_start();
$_SESSION['username'] = $username;

header("location: main-page.php");
}


?>
