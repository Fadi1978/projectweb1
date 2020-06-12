<?PHP
include "../config.php";
class PromotionC {
function afficherPromotion ($promotion){
		echo "id: ".$promotion->getId_promo()."<br>";
		echo "Date Debut: ".$promotion->getDate_debut()."<br>";
		echo "Date Fin: ".$promotion->getDate_fin()."<br>";
		echo "Id categorie: ".$promotion->getId_categorie()."<br>";
		echo "Nouveau Prix: ".$promotion->getNouv_prix()."<br>";

	}
	
	function ajouterPromotion($promotion){
		$sql="insert into promotion (id_promo,date_debut,date_fin,id_categorie,nouv_prix) values (:id_promo, :date_debut,:date_fin,:id_categorie,:nouv_prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_promo=$promotion->getId_promo();
        $date_debut=$promotion->getDate_debut();
        $date_fin=$promotion->getDate_fin();
        $id_categorie=$promotion->getId_categorie();
		$nouv_prix=$promotion->getNouv_prix();

		$req->bindValue(':id_promo',$id_promo);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nouv_prix',$nouv_prix);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherPromotions(){
		//$sql="SElECT * From promotion e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerPromotion($id_promo){
		$sql="DELETE FROM promotion where id_promo= :id_promo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_promo',$id_promo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	function modifierPromotion($promotion,$id_promo){
		$sql="UPDATE promotion SET id_promo=:id_promo, date_debut=:date_debut,date_fin=:date_fin,id_categorie=:id_categorie,nouv_prix=:nouv_prix WHERE id_promo=:id_promo";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_promoo=$promotion->getId_promo();
        $date_debut=$promotion->getDate_debut();
        $date_fin=$promotion->getDate_fin();
        $id_categorie=$promotion->getId_categorie();
		 $nouv_prix=$promotion->getNouv_prix();

		$datas = array(':id_promoo'=>$id_promoo, ':id_promo'=>$id_promo, ':date_debut'=>$date_debut,':date_fin'=>$date_fin,':id_categorie'=>$id_categorie,':nouv_prix'=>$nouv_prix);
		$req->bindValue(':id_promoo',$id_promoo);
		$req->bindValue(':id_promo',$id_promo);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':id_categorie',$id_categorie);
				$req->bindValue(':nouv_prix',$nouv_prix);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromotion($id_promo){
		$sql="SELECT * from promotion where id_promo=$id_promo";
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