<?PHP
include "commande.php";
include "commandeC.php";

if (isset($_POST['id_commande']) and isset($_POST['date']) and isset($_POST['id_panier']))
{
$commande1=new commande($_POST['id_commande'],$_POST['date'],$_POST['id_panier']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1C->ajoutercommande($commande1);
header('Location: affichercommande.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>
