<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['id_produit'])){
	$produitC=new produitC();
    $result=$produitC->recupererproduit($_GET['id_produit']);
	foreach($result as $row){
		$id_produit=$row['id_produit'];
		$nom_produit=$row['nom_produit'];
		$type=$row['type'];
		$id_categorie=$row['id_categorie'];

?>
<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>id_produit</td>
<td><input type="number" name="id_produit" value="<?PHP echo $id_produit ?>"></td>
</tr>
<tr>
<td>nom_produit</td>
<td><input type="text" name="nom_produit" value="<?PHP echo $nom_produit ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>id_categorie</td>
<td><input type="number" name="id_categorie" value="<?PHP echo $id_categorie ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_produit_ini" value="<?PHP echo $_GET['id_produit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['id_produit'],$_POST['nom_produit'],$_POST['type'],$_POST['id_categorie']);
	$produitC->modifierproduit($produit,$_POST['id_produit_ini']);
	echo $_POST['id_produit_ini'];
	header('Location: afficherproduit.php');
}
?>
</body>
</HTMl>