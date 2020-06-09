
<?php

include "../Core/evenmentC.php";

session_start();

if(isset($_POST['login']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
  $user1C=new EvenmentC();
  $r=$user1C->loginusers($user,$pass); 
foreach ($r as $key)
{
if ($key['username']==$user && $key['password']==$pass)
{
$_SESSION["login_in"] = "true";
$_SESSION["nom"]= $key['nom'];
$_SESSION["id"]= $key['id'];
header("location: ajouterPromotion.html");

}
else
{
$_SESSION["login_in"] = "false";

}
}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="f"   method="POST"  >
    <input type="text"  placeholder="Username"  name="user"><br>
    <input type="text"  placeholder="Password"  name="pass"><br>
    <input type="submit" value="Login" name="login">
</form>
</body>
</html>
