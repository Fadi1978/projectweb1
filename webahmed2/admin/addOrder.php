
<?PHP
include "../core/OrderC.php";
include "../core/produitC.php";


echo $_POST['CID'];
echo $_POST['PID'];
echo $_POST['Qty'];
echo $_POST['OED'];
if(isset($_POST['CID']) and isset($_POST['Qty']) and isset($_POST['PtV']) and isset($_POST['OED'])){
echo '          1//1';
$Produit=new ProduitC();
$P=$Produit->recupererProduit($_POST['PID']);
echo '          2//2';
foreach($P as $row){
$prixU=$row['prix_produit'];}
$prix=$prixU * $_POST['Qty'];





//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$Order1=new Order($_POST['CID'],$_POST['PID'],$_POST['Qty'],$prix,$_POST['PtV'],$_POST['OED'],'En Attente');
$Order1C=new OrderC();
$Order1C->addOrder($Order1);

/////////////////////////////
$Notification = new Notification("commande","Le client ".$_POST['CID']." a passé une commande.");
$Notificationc = new NotificationC();
$Notificationc->addNotification($Notification);
header('Location: tables-DisplayOrders.php');
	
}else{
	echo "verify the fields.";
}
//*/

?>