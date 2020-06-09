<HTML>
<head>
</head>
<body>
<?PHP
include "../entite/panier.php";
include "../core/panierC.php";
if (isset($_GET['id_panier']))
{
	$panierC=new panierC();
    $result=$panierC->recupererpanier($_GET['id_panier']);
	foreach($result as $row){
		$id_panier=$row['id_paneir'];
		$id_commande=$row['id_commande'];
	}
}
?>

<form method="POST">
<table>
<caption>Modifier panier</caption>
<tr>
<td>id_commande</td>
<td><input type="number" name="id_commande" value="<?PHP echo $id_commande ?>"></td>
</tr>
<tr>
<td>id_panier</td>
<td><input type="text" name="id_panier" value="<?PHP echo $id_panier ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_commande_ini" value="<?PHP echo $_GET['id_commande'];?>"></td>
</tr>
</table>
</form>
<?PHP
	
if (isset($_POST['modifier'])){
	$panier=new panier($_POST['id_commande'],$_POST['id_panier']);
	$panierC->modifierpanier($panier,$_POST['id_panier_ini'])
	echo $_POST['id_panier_ini'];
	header('Location: afficherpanier.php');
}

?>
</body>
</HTMl>