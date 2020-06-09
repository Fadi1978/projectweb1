<?PHP
include "../entite/commande.php";
include "../core/commandeC.php";
$commande=new commande(75,6,20);
$commandeC=new commandeC();
$commandeC->affichercommande($commande);
echo "****************";
echo "<br>";
echo "id_commande:".$commande->getid_commande();
echo "<br>";
echo "date:".$commmande->getdate();
echo "<br>";
echo "id_panier:".$commande->getid_panier();
echo "<br>";


?>