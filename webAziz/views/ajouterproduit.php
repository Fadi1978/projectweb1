<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['id_produit']) and isset($_POST['nom_produit']) and isset($_POST['type']) and isset($_POST['id_categorie'])){
$produit1=new produit($_POST['id_produit'],$_POST['nom_produit'],$_POST['type'],$_POST['id_categorie']);
//Partie2
/*
var_dump($produit1);
}
*/
//Partie3
$produit1C=new produitC();
$produit1C->ajouterproduit($produit1);
header('Location: afficherproduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>