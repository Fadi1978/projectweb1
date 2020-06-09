<?PHP
include "../entite/panier.php";
include "../core/panierC.php";

if (isset($_POST['id_panier']) and isset($_POST['id_produit']))
{
$panier1=new panier($_POST['id_panier'],$_POST['id_produit']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$panier1C=new panierC();
$panier1C->ajouterpanier($panier1);
header('Location: afficherpanier1.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>
