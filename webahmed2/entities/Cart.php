<?PHP
include "../entities/Cookie.php";
class Cart{
	private $id_produit;
	private $ADD_IP;
	private $Qty;
    private $Prix;
	function __construct($id_produit,$Qty,$Prix){
		$this->id_produit=$id_produit;
		$this->ADD_IP=setCookies();
		$this->Qty=$Qty;
        $this->Prix=$Prix;
	}
	
	function getid_produit(){
		return $this->id_produit;
	}
	function getADD_IP(){
		return $this->ADD_IP;
	}
	function getQty(){
		return $this->Qty;
	}
	function getPrix(){
		return $this->Prix;
	}
	
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setID_ADD($ID_ADD){
		$this->ID_ADD=$ID_ADD;
	}
	function setQty($Qty){
		$this->Qty=$Qty;
	}
    function setPrix($Prix){
		$this->Prix=$Prix;
	}

	
}

?>