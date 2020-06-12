<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/evenment.php";
include "../core/evenmentC.php";
if (isset($_GET['id'])){
	$evenmentC=new EvenmentC();
    $result=$evenmentC->recupererEvenment($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nbr_invt=$row['nbr_invt'];
		$nom_evn=$row['nom_evn'];
		$date_evn=$row['date_evn'];
?>
<form method="POST">
<table>
<caption>Modifier Evenment</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nombre d'invites</td>
<td><input type="number" name="nbr_invt" value="<?PHP echo $nbr_invt ?>"></td>
</tr>
<tr>
<td>Nom Evenment</td>
<td><input type="text" name="nom_evn" value="<?PHP echo $nom_evn ?>"></td>
</tr>
<tr>
<td>Date d'evenment </td>
<td><input type="text" name="date_evn" value="<?PHP echo $date_evn ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$evenment=new evenment($_POST['id'],$_POST['nbr_invt'],$_POST['nom_evn'],$_POST['date_evn']);
	$evenmentC->modifierEvenment($evenment,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherEvenment1.php');
}
?>
</body>
</HTMl>