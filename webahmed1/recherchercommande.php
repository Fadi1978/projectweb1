<HTML>
<head>
</head>
<body>
<?PHP
include "../entite/commande.php";
include "../core/commandeC.php";

?>

<form method="POST">
<table>
<caption>rechercher commande</caption>
<tr>
<td>id_commande</td>
<td><input type="number" name="id_commande" value="<?PHP echo $id_commande ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="rechercher" value="rechercher"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_commande_ini" value="<?PHP echo $_GET['id_commande'];?>"></td>
</tr>
</table>
</form>
<?PHP
	
if (isset($_POST['rechercher'])){
	$commande=new commande($_POST['id_commande'],$_POST['date'],$_POST['id_panier']);
	$commandeC->recherchercommande($commande,$_POST['id_commande_ini']);
	echo $_POST['id_commande_ini'];
	header('Location: affichercommande.php');
}

?>
</body>
</HTMl>