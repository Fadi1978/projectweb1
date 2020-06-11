<HTML>
<head>
</head>
<body>
<?PHP
include "../core/categorieC.php";

?>

<form method="POST">
<table>
<caption>rechercher categorie</caption>
<tr>
<td>id_categorie</td>
<td><input type="number" name="id_categorie" value="<?PHP echo $_GET['id_categorie']; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="rechercher" value="rechercher"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_categorie_ini" value="<?PHP echo $_GET['id_categorie'];?>"></td>
</tr>
</table>
</form>
<?PHP
	
if (isset($_POST['rechercher'])){
	$Categorie=new Categorie($_POST['id_categorie'],$_POST['nom_categorie'],$_POST['id_produit']);
	$CategorieC->recherchercategorie($categorie,$_POST['id_categorie_ini']);
	echo $_POST['id_categorie_ini'];
	header('Location: affichercategorie.php');
}

?>
</body>
</HTMl>