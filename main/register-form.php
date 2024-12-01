<!doctype HTML>
<html lang="en-US">

<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../CSS/register-form.css" media="screen" />
<title>Wiki</title>
</head>

<html>
<body>
    

     <div id='main'>
       <h1>Register Form</h1>
          <form action="registration.php" method="post">
	      <label for="username">
	      <i class="fas fa-user"></i>
	      </label>     
	      <input type="text" name="username" placeholder="Username" id='uRForm' required> <br><br>
	      <label for="password">
	      <i class="fas fa-lock"></i>
	      </label>
	      <input type="text" name="password" placeholder="Password" id='uRPassword' required> <br><br>
	      <input type="submit" value='register' id='registerButton'>
	      <br><br>
	      <a href="main-page.php"> Go back </a>
	      <p>Already Have an Account? Login here. <a href="login-form.php"> Login-Form </a> </p>
         </form>
     </div>





</body>
</html>
