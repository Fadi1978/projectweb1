<?PHP
class Categorie{
	private $id_categorie;
	private $nom_categorie;
	private $description;
	
	function __construct($id_categorie,$nom_categorie,$description){
		$this->id_categorie=$id_categorie;
		$this->nom_categorie=$nom_categorie;
		$this->description=$description;
		
	}
	
	function getid_categorie(){
		return $this->id_categorie;
	}
	function getnom_categorie(){
		return $this->nom_categorie;
	}
	function getdescription(){
		return $this->description;
	}

	

	function setid_categorie($id_categorie){
		$this->id_categorie=$id_categorie;
	}
	function setnom_categorie($nom_categorie){
		$this->nom_categorie=$nom_categorie;
	}
	function setdescription($description){
		$this->description=$description;
	}
	
	
}

?>