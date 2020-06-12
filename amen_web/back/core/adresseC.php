<?PHP
include "../config.php";
class adresseC {
    function afficherAdresse ($adresse){
            echo"id:".$adresse->getId()."<br>";
            echo "adr:".$adresse->getAdresse()."<br>";
            echo "postal:".$adresse->getPostal()."<br>";
            echo "city:".$adresse->getCity()."<br>";
        }
        function afficherAdresses(){
            $sql="SElECT * From adresse";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
    function supprimerAdresse($id){
		$sql="DELETE FROM adresse where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
}
?>