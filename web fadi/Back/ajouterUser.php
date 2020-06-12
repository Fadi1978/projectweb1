<?PHP
include "../entities/user.php";

include "../Core/userC.php";

 if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password']) )
{
$user1=new user($_POST['username'],$_POST['email'],$_POST['password']);
//Partie2
/*
var_dump($evenment1);
}
*/
//Partie3
$user1C=new UserC();
$user1C->regsiteruser($user1);
header('Location: login.php');
	
}
/*else{
	echo "vérifier les champs";
}
*/
?>