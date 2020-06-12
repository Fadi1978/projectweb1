<?PHP
include "../core/promotionC.php";
$promotion1C=new PromotionC();
$listePromotions=$promotion1C->afficherPromotions();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Date debut</td>
<td>Date fin</td>
<td>id categorie</td>
<td>Supprimer</td>
<td>Modifier</td>

</tr>

<?PHP
foreach($listePromotions as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_promo']; ?></td>
	<td><?PHP echo $row['date_debut']; ?></td>
	<td><?PHP echo $row['date_fin']; ?></td>
	<td><?PHP echo $row['id_categorie']; ?></td>
	<td><form method="POST" action="supprimerPromotion.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_promo']; ?>" name="id_promo">
	</form>
	</td>
	<td><a href="modifierPromotion.php? id_promo=<?PHP echo $row['id_promo']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
