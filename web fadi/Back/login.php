
<?php
include "../entities/user.php";

include "../Core/userC.php";

session_start();

if(isset($_POST['login']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
  $user1C=new UserC();
  $r=$user1C->loginusers($user,$pass); 
foreach ($r as $key)
{
if ($key['username']==$user && $key['password']==$pass)
{
$_SESSION["login_in"] = "true";
$_SESSION["nom"]= $key['nom'];
$_SESSION["id"]= $key['id'];
header("location: index.html");

}
else
{
$_SESSION["login_in"] = "false";

}
}


}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
  <h2>WELCOME TO SHOP MAX</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form name="f1"   method="POST" action="ajouterUser.php">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="username"/>
			<input type="text" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password"name="password" />
						<input type="submit" class="btn" value="register" name="register">

			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form name="f"   method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="user" name="user" />
			<input type="password" placeholder="pass" name="pass" />
			<a href="#">Forgot your password?</a>
			<input type="submit" class="btn" value="login" name="login">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
<script src="main.js"> </script>
  </body>
</html>

