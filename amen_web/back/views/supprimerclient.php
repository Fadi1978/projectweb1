<?PHP
include "../entities/client.php";
include "../core/clientC.php";
$clientC=new clientC();
if (isset($_POST["id"])){
	$clientC->supprimerClient($_POST["id"]);
	$sql="DELETE FROM carte_fidelite WHERE id_carte=:id";	
$db=config::getConnexion();         
$req=$db->prepare($sql);
	header('Location: affichageclient1.php');
}

?>