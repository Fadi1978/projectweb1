<HTML>
<head>
	<script src="../script/custom-js/Cart.js"></script>
</head>
<body>
<?PHP
include "../core/CartC.php";
echo $_POST['updateS'];
echo $_POST['updateIP'];
echo $_POST['updatePID'];
if (isset($_POST['updateIP']) and isset($_POST['updatePID']) and isset($_POST['qty']) and isset($_POST['updateS'])){
	$Cart2C=new CartC();
	$Cart2C= $Cart2C->getCart($_POST['updateIP'],$_POST['updatePID']);
	foreach($Cart2C as $row)
	{
	$sum=$_POST['updateS'];
	$qty=$row['Qty'];
	$sum=($sum/$qty)*$_POST['qty'];
	$Cart1=new Cart($_POST['updatePID'],$_POST['qty'],$sum);
	$Cart1C=new CartC();
	$Cart1C->updateCart($Cart1);
}
	header('Location: pay-viewcart.php');
}
?>
</body>
</HTMl>