<?PHP
include "../core/evenmentC.php";
$evenment1C=new EvenmentC();
$listeEvenments=$evenment1C->afficherEvenments();

//var_dump($listeEvenments->fetchAll());
?>
<table border="1">
<tr>
<td>ID</td>
<td>Nombre d'invites</td>
<td>Nom Evenment</td>
<td>Date d'evenment</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeEvenments as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nbr_invt']; ?></td>
	<td><?PHP echo $row['nom_evn']; ?></td>
	<td><?PHP echo $row['date_evn']; ?></td>
	<td><form method="POST" action="supprimerEvenment.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierEvenment.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	
	</tr>
	<?PHP
		header('Location: afficherEvenment1.php');

}
?>
</table>


