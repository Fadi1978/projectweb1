<?PHP
include "../core/promotionC.php";
$promotionC=new PromotionC();
if (isset($_POST["id_promo"])){
	$promotionC->supprimerPromotion($_POST["id_promo"]);
	header('Location: afficherPromotion.php');
}

?>