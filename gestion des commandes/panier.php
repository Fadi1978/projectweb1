<?PHP
class panier{
	private $id_panier;
	private $id_produit;
	function __construct($id_panier,$id_produit){
		$this->id_panier=$id_panier;
		$this->id_produit=$id_produit;
	}
	
	function getid_panier(){
		return $this->id_panier;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	
	function setid_panier($id_panier){
		$this->id_panier=$id_panier;
	}
	
	function setid_produit($id_produit){
		$this->id_produit=id_produit;
	}
	
}

?>