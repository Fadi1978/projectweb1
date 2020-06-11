<?PHP
class produit{
	private $id_produit;
	private $nom_produit;
	private $type;
	private $id_categorie;
	function __construct($id_produit,$nom_produit,$type,$id_categorie){
		$this->id_produit=$id_produit;
		$this->nom_produit=$nom_produit;
		$this->type=$type;
		$this->id_categorie=$id_categorie;
	}
	
	function getid_produit(){
		return $this->id_produit;
	}
	function getnom_produit(){
		return $this->nom_produit;
	}
	function gettype(){
		return $this->type;
	}

	function getid_categorie(){
		return $this->id_categorie;
	}

	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setnom_produit($nom_produit){
		$this->nom_produit;
	}
	function settype($type){
		$this->type=$type;
	}
	function setid_categorie($id_categorie){
		$this->id_categorie=$id_categorie;
	}
	
}

?>