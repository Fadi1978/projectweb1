<?PHP
include "../config.php";
class panierC {
function afficherpanier ($panier){
		echo "id_panier: ".$panier->getid_panier()."<br>";
		echo "id_produit: ".$panier->getid_produit()."<br>";
	}

	function ajouterpanier($panier){
		$sql="insert into panieer (id_panier,id_produit) values (:id_panier, :id_produit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_panier=$panier->getid_panier();
        $id_produit=$panier->getid_produit();
		$req->bindValue(':id_panier',$id_panier);
		$req->bindValue(':id_produit',$id_produit);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficherpaniers(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id_livraison= a.livraison";
		$sql="SElECT * From panieer";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpaniers($id_panier){
		$sql="DELETE FROM panieer where id_panier= :id_panier";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_panier',$id_panier);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpanier($panier,$id_panier){
		$sql="UPDATE panieer SET id_panier=:id_panier,id_produit=:id_produit WHERE id_panier=:id_panier";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_panier=$panier->getid_panier();
        $id_produit=$panier->getid_produit();
		$datas = array(':id_panier'=>$id_panier, ':id_produit'=>$id_produit);
		$req->bindValue(':id_panier',$id_panier);
		$req->bindValue(':id_produit',$id_produit);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);	
}
}
function recupererpanier($id_panier){
		$sql="SELECT * from panieer where id_panier=$id_panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherchercommande($id_commande){
		$sql="SELECT * from commandes where id_commande=$id_commande";
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