<?PHP
include "../config.php";
class produitC {
function afficherproduit ($produit){
		echo "id_produit: ".$produit->getid_produit()."<br>";
		echo "nom_produit: ".$produit->getnom_produit()."<br>";
		echo "type: ".$produit->gettype()."<br>";
		echo "id_categorie: ".$produit->getid_categorie()."<br>";
	}

	function ajouterproduit($produit){
		$sql="insert into produit (id_produit,nom_produit,type,id_categorie) values (:id_produit, :nom_produit,:type,:id_categorie)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_produit=$produit->getid_produit();
        $nom_produit=$produit->getnom_produit();
        $type=$produit->gettype();
        $id_categorie=$produit->getid_categorie();
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':type',$type);
		$req->bindValue(':id_categorie',$id_categorie);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficherproduits(){
		//$sql="SElECT * From produits e inner join formationphp.produit a on e.id_produit= a.produit";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimerproduit($id_produit){
		$sql="DELETE FROM produit where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$id_produit){
		$sql="UPDATE produit SET id_produit=:id_produitt, nom_produit=:nom_produit,type=:type,id_categorie=:id_categorie WHERE id_produit=:id_produit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_produitt=$produit->getid_produit();
        $nom_produit=$produit->getnom_produit();
        $type=$produit->gettype();
        $id_categorie=$produit->getid_categorie();
		$datas = array(':id_produitt'=>$id_produitt, ':id_produit'=>$id_produit, ':nom_produit'=>$nom_produit,':type'=>$type,':id_categorie'=>$id_categorie);
		$req->bindValue(':id_produitt',$id_produitt);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':type',$type);
		$req->bindValue(':id_categorie',$id_categorie);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherproduit($tarif){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficheOrderNom()
    {
        $sql="SELECT * From produit ORDER BY nom";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste ;
        }
        catch (Exception $e)
        {
            die('Erreur; '.$e->getMessage());
        }
}
function afficheproduitF($nbr)
    {
        $sql="SELECT * From produit where nbrf >= $nbr";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste ;
        }
        catch (Exception $e)
        {
            die('Erreur; '.$e->getMessage());
        }
}
}

?>