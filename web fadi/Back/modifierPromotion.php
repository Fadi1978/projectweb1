<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";
if (isset($_GET['id_promo'])){
	$promotionC=new PromotionC();
    $result=$promotionC->recupererPromotion($_GET['id_promo']);
	foreach($result as $row){
		$id_promo=$row['id_promo'];
		$date_debut=$row['date_debut'];
		$date_fin=$row['date_fin'];
		$id_categorie=$row['id_categorie'];
?>
<form method="POST">
<table>
<caption>Modifier Promotion</caption>
<tr>
<td>id Promoo</td>
<td><input type="number" name="id_promo" value="<?PHP echo $id_promo ?>"></td>
</tr>
<tr>
<td>Date Debut</td>
<td><input type="text" name="date_debut" value="<?PHP echo $date_debut ?>"></td>
</tr>
<tr>
<td>Date Fin</td>
<td><input type="text" name="date_fin" value="<?PHP echo $date_fin ?>"></td>
</tr>
<tr>
<td>Id categorie </td>
<td><input type="number" name="id_categorie" value="<?PHP echo $id_categorie ?>"></td>
</tr>
<tr>
<td>Nouveau Prix</td>
<td><input type="number" name="nouv_prix"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id_promo'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$promotion=new promotion($_POST['id_categorie'],$_POST['date_debut'],$_POST['date_fin'],$_POST['id_categorie'],$_POST['nouv_prix']);
	$promotionC->modifierPromotion($promotion,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherPromotion1.php');
}
?>
</body>
</HTMl>