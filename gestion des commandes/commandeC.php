<?PHP
include "config.php";
class commandeC {
function affichercommande ($commande){
		echo "id_commande: ".$commande->getid_commande()."<br>";
		echo "date: ".$commande->getdate()."<br>";
		echo "id_panier: ".$commande->getid_panier()."<br>";
	}

	function ajoutercommande($commande){
		$sql="insert into commandes (id_commande,date,id_panier) values (:id_commande, :date,:id_panier)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_commande=$commande->getid_commande();
        $date=$commande->getdate();
        $id_panier=$commande->getid_panier();
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_panier',$id_panier);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function affichercommandes(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id_livraison= a.livraison";
		$sql="SElECT * From commandes";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommandes($id_commande){
		$sql="DELETE FROM commandes where id_commande= :id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($commande,$id_commande){
		$sql="UPDATE commandes SET id_commande=:id_commande, date=:date ,id_panier=:id_panier WHERE id_commande=:id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_commande=$commande->getid_commande();
        $date=$commande->getdate();
        $id_panier=$commande->getid_panier();
		$datas = array(':id_commande'=>$id_commande, ':date'=>$date, ':id_panier'=>$id_panier);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_panier',$id_panier);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);	
}
}
function recupererEmploye($id_commande){
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