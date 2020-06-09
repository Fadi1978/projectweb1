<?PHP
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_POST["id_panier"])){
	$panierC->supprimerpaniers($_POST["id_panier"]);
	header('Location: afficherpanier.php');
}

?>