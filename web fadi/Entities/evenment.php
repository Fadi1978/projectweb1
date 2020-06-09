<?PHP
class Evenment{
	private $id;
	private $nbr_invt;
	private $nom_evn;
	private $date_evn;
	function __construct($id,$nbr_invt,$nom_evn,$date_evn){
		$this->id=$id;
		$this->nbr_invt=$nbr_invt;
		$this->nom_evn=$nom_evn;
		$this->date_evn=$date_evn;
	}
	
	function getId(){
		return $this->id;
	}
	function getNbr(){
		return $this->nbr_invt;
	}
	function getNom(){
		return $this->nom_evn;
	}
	function getDate_evn(){
		return $this->date_evn;
	}
	

	function setNbr($nbr_invt){
		$this->nbr_invt=$nbr_invt;
	}
	function setNom($nom_evn){
		$this->nom_evn;
	}
	function setDate_evn($date_evn){
		$this->date_evn=$date_evn;
	}

	
}

?>