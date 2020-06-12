<?PHP
include "../core/evenmentC.php";
$evenmentC=new EvenmentC();
if (isset($_POST["id"])){
	$evenmentC->supprimerEvenment($_POST["id"]);
	header('Location: afficherEvenment1.php');
}

?>