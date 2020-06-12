<?PHP
include "../config.php";
class clientC {
    function afficherClient ($client){
            echo"id:".$client->getId()."<br>";
            echo"nom:".$client->getNom()."<br>";
            echo "prenom:".$client->getPrenom()."<br>";
            echo "telephone:".$client->getTelephone()."<br>";
            echo "email:".$client->getEmail()."<br>";
        }
        function afficherClients(){
            //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
            $db = config::getConnexion();

		$vidparpage = 2;
$vidtotalereq = $db->query("SELECT id FROM client");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
    if ($i==$pagecc)
    {
        echo $i;
    }
    else{
   echo '<a href="affichageclient1.php?page='.$i.' ">'.$i.'</a> ';
    }
}

		$sql="SElECT * FROM client ORDER BY id LIMIT $dep,$vidparpage ";

           // $sql="SElECT * From client LIMIT 0,5";
           // $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }


    function afficherClientsAdr(){
        $db = config::getConnexion();

		$vidparpage = 2;
$vidtotalereq = $db->query("SELECT id FROM adresse");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
   echo '<a href="affichageclient1.php?page='.$i.'">'.$i.'</a> ';
}

		$sql="SElECT * FROM adresse ORDER BY id LIMIT $dep,$vidparpage ";

           // $sql="SElECT * From client LIMIT 0,5";
           // $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }

    function supprimerClient($id){
        $sql="DELETE FROM client where id= :id";
        $sql1="DELETE FROM adresse where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        $req1=$db->prepare($sql1);
        $req->bindValue(':id',$id);
        $req1->bindValue(':id',$id);
		try{
            $req->execute();
            $req1->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        public function trinomA()
    {
        $db = config::getConnexion();
        $sql = " SELECT * FROM client ORDER BY nom ASC";
        
         try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
    
    }
    public function trinomZ()
	{
		$db = config::getConnexion();
    	$sql = " SELECT * FROM client ORDER BY nom DESC";
		
try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
	
    }
    public function triida()
	{
		$db = config::getConnexion();
    	$sql = " SELECT * FROM client ORDER BY id ASC";
		
try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
    }
    
    public function triidd()
	{
		$db = config::getConnexion();
    	$sql = " SELECT * FROM client ORDER BY id DESC";
		
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