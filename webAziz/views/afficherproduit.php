<?PHP
include "../core/produitC.php";
$produit1C=new produitC();
$listeproduits=$produit1C->afficherproduits();

//var_dump($listeproduits->fetchAll());
?>
<table border="1">
<tr>
<td>id_produit</td>
<td>nom_produit</td>
<td>type</td>
<td>id_categorie</td>
<td>supprimer</td>
<td>modifier</td>
<td>rechercher</td>
</tr>

<?PHP
foreach($listeproduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_produit']; ?></td>
	<td><?PHP echo $row['nom_produit']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['id_categorie']; ?></td>
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_produit']; ?>" name="id_produit">
	</form>
	</td>
	<td><a href="modifierproduit.php?id_produit=<?PHP echo $row['id_produit']; ?>">
	Modifier</a></td>
	<td><a href="rechercherproduit.php?id_produit=<?PHP echo $row['id_produit']; ?>">
	Rechercher</a></td>
	</tr>
	<?PHP
}
?>
</table>


