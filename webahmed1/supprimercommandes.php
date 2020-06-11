<?PHP
include "commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["id_commande"])){
	$commandeC->supprimercommandes($_POST["id_commande"]);
	header('Location: affichercommande.php');
}

?>