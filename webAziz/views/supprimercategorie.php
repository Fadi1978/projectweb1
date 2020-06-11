<?PHP
include "../core/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["id_categorie"])){
	$categorieC->supprimercategorie($_POST["id_categorie"]);
	header('Location: affichercategorie.php');
}

?>