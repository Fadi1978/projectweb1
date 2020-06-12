<?PHP
include "../entities/evenment.php";
include "../core/evenmentC.php";

if (isset($_POST['id']) and isset($_POST['nbr_invt']) and isset($_POST['nom_evn']) and isset($_POST['date_evn']) ){
$evenment1=new evenment($_POST['id'],$_POST['nbr_invt'],$_POST['nom_evn'],$_POST['date_evn']);
//Partie2
/*
var_dump($evenment1);
}
*/
//Partie3
$evenment1C=new EvenmentC();
$evenment1C->ajouterEvenment($evenment1);
header('Location: ajouterEvenment1.html');
	
}else{
	echo "vérifier les champs";
}


?>