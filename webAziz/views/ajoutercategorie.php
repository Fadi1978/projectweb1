<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['id_categorie']) and isset($_POST['nom_categorie']) and isset($_POST['description']) ){
$categorie1=new categorie($_POST['id_categorie'],$_POST['nom_categorie'],$_POST['description']);
//Partie2
/*
var_dump($categorie1);
}
*/
//Partie3
$categorie1C=new categorieC();
$categorie1C->ajoutercategorie($categorie1);
header('Location: affichercategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>