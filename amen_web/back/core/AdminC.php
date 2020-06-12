<?php

require_once '../config.php';

class  adminC {
	


	function ajouteradmin($admin)
	{

 	$sql="INSERT INTO admin (id,mdp,cin,tel) VALUES(:ref,:mar,:cin,:tel)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $ref=$admin->getid();
        $mar=$admin->getmdp();
		 $cin=$admin->getcin();
		  $tel=$admin->gettel();
      
       
		$req->bindValue(':ref',$ref);
		$req->bindValue(':mar',$mar);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':tel',$tel);
		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
function modifieradmin($admin,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE admin SET mdp=:mdp , tel=:tel   where cin=:id";
 		try{

        $req=$db->prepare($sql);		
       
		$req->bindValue(':id',$id);
		
	
		$req->bindValue(':mdp',$admin->getmdp());
		$req->bindValue(':tel',$admin->gettel());
		
			

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
		function recupereradmin($ref){
		$sql="SELECT * from admin where cin='$ref' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
 		$admin= $req->fetchALL(PDO::FETCH_OBJ);
		return $admin;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimeradmin($ref){
		$sql="DELETE  from admin where cin='$ref' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficheradmin()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM admin";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	 function verifierLogin($login,$password)
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS count,id,mdp,role FROM admin WHERE id = :login AND mdp = :password  LIMIT 1';
			$req = $db->prepare($sql);
			$req->bindValue(':login',$login);
			$req->bindValue(':password',$password);
			$req->execute();
			$result = $req->fetch(PDO::FETCH_OBJ);
			return $result;
		}
		
			 function verifsuper($cin)
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS cin FROM admin WHERE cin = :cin AND role = 1  LIMIT 1';
			$req = $db->prepare($sql);
			$req->bindValue(':cin',$cin);
			$req->execute();
			$result = $req->fetch(PDO::FETCH_OBJ);
			return $result;
		}
		
	
}


?>