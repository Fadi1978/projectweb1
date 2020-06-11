<?PHP
include "../core/CartC.php";
$CartC=new CartC();
if (isset($_POST['deleteIP']) and isset($_POST['deletePID'])){
	$CartC->deleteProdCart($_POST['deleteIP'],$_POST['deletePID']);
	header('Location: pay-viewcart.php');
}

?>