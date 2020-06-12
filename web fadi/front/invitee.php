<?PHP
include "../entities/evenment.php";
include "../core/evenmentC.php";
    $bdd = new PDO('mysql:host=localhost;dbname=markting', 'root', '');

$nom_evnn=$_POST['evenment'];

$nom_evnn=$_POST['evenment'];
$sql_info_author = $bdd->query("SELECT * FROM evenment WHERE nom_evn='$nom_evnn'");
  $data_author = $sql_info_author -> fetch();
  $nb_msg = $data_author['nbr_invt'] + 1;
$sql_add_author = $bdd->query("UPDATE evenment SET nbr_invt='$nb_msg' WHERE nom_evn='$nom_evnn'");





            header('Location: evenment.php');

?>