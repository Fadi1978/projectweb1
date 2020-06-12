<?PHP
class client{
	private $id;
	private $nom;
	private $prenom;
	private $telephone;
	private $email;
	private $adr;
	private $postal;
	private $city;
	private $mdp;
	function __construct($nom,$prenom,$telephone,$email,$adr,$postal,$city,$mdp){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->telephone=$telephone;
		$this->email=$email;
		$this->adr=$adr;
		$this->postal=$postal;
		$this->city=$city;
		$this->mdp=$mdp;
	}
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function gettelephone(){
		return $this->telephone;
	}
	function getemail(){
		return $this->email;
	}
	function getadr(){
		return $this->adr;
	}
	function getpostal(){
		return $this->postal;
	}
	function getcity(){
		return $this->city;
	}
	function getmdp(){
		return $this->mdp;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function settelephone($telephone){
		$this->telephone=$telephone;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setadr($adr){
		$this->adr=$adr;
	}
	function setpostal($postal){
		$this->postal=$postal;
	}
	function setcity($city){
		$this->city=$city;
	}
	function setmdp($mdp){
		$this->mdp=$mdp;
	}
	
}

	


?>