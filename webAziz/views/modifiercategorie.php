<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
if (isset($_GET['id_categorie'])){
	$categorieC=new categorieC();
    $result=$categorieC->recuperercategorie($_GET['id_categorie']);
	foreach($result as $row){
		$id_categorie=$row['id_categorie'];
		$nom_categorie=$row['nom_categorie'];
		$description=$row['description'];
?>
<form method="POST">
<table>
<caption>Modifier categorie</caption>
<tr>
<td>id_categorie</td>
<td><input type="number" name="id_categorie" value="<?PHP echo $id_categorie ?>"></td>
</tr>
<tr>
<td>nom_categorie</td>
<td><input type="text" name="nom_categorie" value="<?PHP echo $nom_categorie ?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_categorie_ini" value="<?PHP echo $_GET['id_categorie'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new categorie($_POST['id_categorie'],$_POST['nom_categorie'],$_POST['description']);
	$categorieC->modifiercategorie($categorie,$_POST['id_categorie_ini']);
	echo $_POST['id_categorie_ini'];
	header('Location: affichercategorie.php');
}
?>
</body>
</HTMl>