<?PHP
class Produit{
	private $id;
	private $nom;
	private $description;
	private $tag;
	private $etat;
	private $couleur;
	private $prix;
	private $categorie;
	private $typee;
	private $id_fournisseur;
	private $marque;
	private $model;
	private $model3d;


	function __construct($nom,$description,$tag,$etat,$couleur,$prix,$categorie,$typee,$marque,$id_fournisseur,$model,$model3d){
		$this->nom=$nom;
		$this->description=$description;
		$this->tag=$tag;
		$this->etat=$etat;
		$this->couleur=$couleur;
		$this->prix=$prix;
		$this->categorie=$categorie;
		$this->typee=$typee;
		$this->marque=$marque;
		$this->id_fournisseur=$id_fournisseur;
		$this->model=$model;
		$this->model3d=$model3d;

				echo "<script type='text/javascript'>alert('trmmm');</script>";

	}
	//get
    function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDescription(){
		return $this->description;
	}
	function getTag(){
		return $this->tag;
	}
	function getEtat(){
		return $this->etat;
	}
	function getCouleur(){
		return $this->couleur;
	}
	function getPrix(){
		return $this->prix;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getTypee(){
		return $this->typee;
	}
	function getFournisseur(){
		return $this->id_fournisseur;
	}
	function getMarque(){
		return $this->marque;
	}
	function getmodel(){
		return $this->model;
	}
	function getmodel3d(){
		return $this->model3d;
	}
	//set
	function setNom($nom){
		$this->nom=$nom;
	}
	function setDescription($description){
		$this->description;
	}
	function setTag($tag){
		$this->tag;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setCouleur($couleur){
		$this->couleur=$couleur;
	}
	function setPrix($prix){
		$this->prix;
	}
	function setCategorie($categorie){
		$this->categorie;
	}
	function setTypee($typee){
		$this->typee;
	}
	function setFournisseur($id_fournisseur){
		$this->id_fournisseur;
	}
	function setMarque($marque){
		$this->marque;
	}
	function setmodel($model){
		$this->model;
	}
	function setmodel3d($model3d){
		$this->model3d;
	}
}

?>