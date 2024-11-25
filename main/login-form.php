<!doctype HTML>
<html lang="en-US">

<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/login-form.css" media="screen" />
<title>Wiki</title>
</head>

<html>
<body>
    

     <div id='main'>
      <h1>Login Form</h1>
      <form action="authenticate.php" method="POST">
	     <label for="username">
	     <i class="fas fa-user"></i>
	     </label>
            <input type="text" name="username" placeholder="Username" id='usernameForm' required> <br> <br>
	     <label for="password">
	     <i class="fas fa-lock"></i>
	     </label>
	     <input type="text" name="password" placeholder="Password" id='usernamePassword' required> <br> <br>
	     <input type='submit' value='login' id='loginButton'>
	     <br><br>
	     <a href="main-page.php"> Go back </a>
	     <p>Dont Have an Account? Register here. <a href="register-form.php"> Register-Form </a> </p>
	 </form>
     </div>


</body>
</html>

