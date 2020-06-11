<?PHP
include "../config.php";
class CategorieC {
function affichercategorie ($categorie){
		echo "id_categorie: ".$categorie->getid_categorie()."<br>";
		echo "nom_categorie: ".$categorie->getnom_categorie()."<br>";
		echo "description: ".$categorie->getdescription()."<br>";
		
	}

	function ajoutercategorie($categorie){
		$sql="insert into categorie (id_categorie,nom_categorie,description) values (:id_categorie, :nom_categorie,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_categorie=$categorie->getid_categorie();
        $nom_categorie=$categorie->getnom_categorie();
        $description=$categorie->getdescription();
        
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);
		$req->bindValue(':description',$description);
		

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function affichercategories(){
		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id_categorie= a.id_categorie";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($id_categorie){
		$sql="DELETE FROM categorie where id_categorie= :id_categorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_categorie',$id_categorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	function modifiercategorie($categorie,$id_categorie){
		$sql="UPDATE categorie SET id_categorie=:id_categoriee, nom_categorie=:nom_categorie ,description=:description WHERE id_categorie=:id_categorie";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_categoriee=$categorie->getid_categorie();
        $nom_categorie=$categorie->getnom_categorie();
        $description=$categorie->getdescription();
        
		$datas = array(':id_categoriee'=>$id_categories, ':id_categorie'=>$id_categorie, ':nom_categorie'=>$nom_categorie,':description'=>$description);
		$req->bindValue(':id_categoriee',$id_categoriee);
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);
		$req->bindValue(':description',$description);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($id_categorie){
		$sql="SELECT * from categorie where id_categorie=$id_categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListecategorie($id){
		$sql="SELECT * from categorie where id_categorie=$id_categorie";
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
        $sql="SELECT * From categorie ORDER BY nom";
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
function affichecategorieF($nbr)
    {
        $sql="SELECT * From categorie where nbrf >= $nbr";
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