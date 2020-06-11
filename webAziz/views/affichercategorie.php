<?PHP
include "../core/categorieC.php";
$Categorie1C=new CategorieC();
$listecategories=$Categorie1C->affichercategories();

//var_dump($listecategories->fetchAll());
?>
<table border="1">
<tr>
<td>id_categorie</td>
<td>nom_categorie</td>
<td>description</td>

<td>supprimer</td>
<td>modifier</td>
<td>rechercher</td>
</tr>

<?PHP
foreach($listecategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_categorie']; ?></td>
	<td><?PHP echo $row['nom_categorie']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	
	<td><form method="POST" action="supprimercategorie.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_categorie']; ?>" name="id_categorie">
	</form>
	</td>
	<td><a href="modifiercategorie.php?id_categorie=<?PHP echo $row['id_categorie']; ?>">
	Modifier</a></td>
	<td><a href="recherchercategorie.php?id_categorie=<?PHP echo $row['id_categorie']; ?>">
	Rechercher</a></td>
	</tr>
	<?PHP
}
?>
</table>


