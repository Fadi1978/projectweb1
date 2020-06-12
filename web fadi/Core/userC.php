<?PHP
include "../config.php";
class UserC {


	  function loginusers($mail, $mdp)
    {

        $sql = "SElECT * From user where username='" . $mail . "' and password='" . $mdp . "'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


function regsiteruser($user)
	{
		$sql="insert into user (username,email,password) values (:username, :email,:password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$user->getUserName();
        $email=$user->getEmail();
        $password=$user->getPassword();
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	
	}
	?>