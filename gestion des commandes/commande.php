<?PHP
class commande{
	private $id_commande;
	private $date;
	private $id_panier;
	function __construct($id_commande,$date,$id_panier){
		$this->id_commande=$id_commande;
		$this->date=$date;
		$this->id_panier=$id_panier;
	}
	
	function getid_commande(){
		return $this->id_commande;
	}
	function getdate(){
		return $this->date;
	}
	function getid_panier(){
		return $this->id_panier;
	}

	function setid_commande($id_commande){
		$this->id_commande=$id_commande;
	}
	function setdate($date){
		$this->date=date;
	}
	function setid_panier($id_panier){
		$this->id_panier=id_panier;
	}
	
}

?>