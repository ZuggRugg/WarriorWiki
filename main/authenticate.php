<?php

  session_start();

  ini_set('display_errors', 1); error_reporting(-1);

  function hash_and_check($username, $password) {
        global $pdo; 
        $sql = "SELECT password FROM registration WHERE username = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$username]);

        $info = $statement->fetch();
        $passwordinfo = $info[0];

        if(!$info) {return "false";}

        if(password_verify($password, $passwordinfo)) {return "correct";} 
        else {return "false";}
    }

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST["username"];
        $password = $_POST["password"];

        try {
            $pdo = new PDO("mysql:host=localhost;dbname=project", "root", "root");
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
        catch(PDOException $e) {echo "Connection failed: " . $e->getMessage();}

             $result = hash_and_check($username, $password);

             if($result == "false") { header("location: register-form.php"); } 
             
             else if ($result == "correct") {
                 $_SESSION["username"] = $username;
                 header("location: main-page.php");
       	    } 
}

?>
