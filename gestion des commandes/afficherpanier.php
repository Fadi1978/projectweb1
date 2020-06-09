<?PHP
include "../core/panierC.php";
$panier1C=new panierC();
$listepaniers=$panier1C->afficherpaniers();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id_panier</td>
<td>id_produit</td>

<td>supprimer</td>
<td>modifier</td>
<td>rechercher</td>
</tr>

<?PHP
foreach($listepaniers as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_panier']; ?></td>
	<td><?PHP echo $row['id_produit']; ?></td>
	<td><form method="POST" action="supprimerpaniers.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_panier']; ?>" name="id_panier">
	</form>
	</td>
	<td><a href="modifierpanier.php?id_panier=<?PHP echo $row['id_panier']; ?>">
	Modifier</a></td>
	<td><a href="rechercherpanier.php?id_panier=<?PHP echo $row['id_panier']; ?>">
	rechercher</a></td>
	</tr>
	<?PHP
}
?>
</table>


