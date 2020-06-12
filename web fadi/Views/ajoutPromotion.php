<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";

if (isset($_POST['id_promo']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['id_categorie']) ){
$promotion1=new promotion($_POST['id_promo'],$_POST['date_debut'],$_POST['date_fin'],$_POST['id_categorie']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$promotion1C=new PromotionC();
$promotion1C->ajouterPromotion($promotion1);
header('Location: afficherPromotion.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>