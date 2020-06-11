<HTML>
<head>
</head>
<body>
<?PHP
include "../core/produitC.php";
include "../entities/produit.php";
?>

<form method="POST">
<table>
<caption>rechercher produit</caption>
<tr>
<td>id_produit</td>
<td><input type="number" name="id_produit" value="<?PHP echo $_GET['id_produit']; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="rechercher" value="rechercher"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_produit_ini" value="<?PHP echo $_GET['id_produit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	
if (isset($_POST['rechercher'])){
	$produit=new produit($_POST['id_produit'],$_POST['nom_produit'],$_POST['type'],$_POST['id_categorie']);
	$produitC->rechercherproduit($produit,$_POST['id_produit_ini']);
	echo $_POST['id_produit_ini'];
	header('Location: afficherproduit.php');
}

?>
</body>
</HTMl>