<?PHP
include "../config.php";
class carteC {
    function afficherCarte ($Carte){
            echo"id_carte:".$Carte->getIDcarte()."<br>";
            echo"email:".$Carte->getIDclient()."<br>";
            echo "nb_point:".$Carte->getNbpoint()."<br>";
            echo "date_creation:".$Carte->getDate()."<br>";
        }
        function afficherCartes(){
            $sql="SElECT * From carte_fidelite";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
    
    
}
?>