<?php
	session_start();

  function user_exists($username, $password) {
        global $pdo; 
        $sql = 'SELECT password FROM registration WHERE username = ?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$username]);

        $info = $statement->fetch();

        if (!$info) {
            return 'nonexistent';
        }

        $hashed_password = $info['password'];

        if (password_verify($password, $hashed_password)) {
            return 'correct';
        } 
        else {
            return 'incorrect';
        }
    }



?>