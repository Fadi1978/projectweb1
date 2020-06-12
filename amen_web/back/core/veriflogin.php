<?php
include_once 'AdminC.php';
	if(isset($_POST['login']) && isset($_POST['password']))
{
	$adminC = new adminC();
	$result = $adminC->verifierLogin($_POST['login'],$_POST['password']);
	if($result->count==0)
	{
	header("location:../views/login.php"); 
		
	}
	else
	{
		session_start();
		$_SESSION['login'] = $result->id;
	
		

		if($result->role == 0)
		{
			header("location:../views/index.php"); 
		}
		if($result->role == 1)
		{
			header("location:../views/check_out.php"); 
		}
		
		

		
	}

}
else
{
	header("location:../views/login.php");
}



 ?>