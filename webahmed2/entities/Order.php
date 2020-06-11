<?PHP

class Order{
	private $id_commande;
	private $id_client;
	private $id_produit;
	private $Qty;
    private $Prix;
	private $date_creation;
	private $PtV;
	private $date_expiration;
        private $etat_commande;
	function __construct($id_client,$id_produit,$Qty,$Prix,$PtV,$date_expiration,$etat_commande){
		$this->id_client=$id_client;
		$this->id_produit=$id_produit;
        $this->Qty=$Qty;
		$this->Prix=$Prix;
        $this->date_creation=date('Y/m/d');
        $this->PtV=$PtV;
		$this->date_expiration=$date_expiration;
        $this->etat_commande=$etat_commande;
        
	}
	
	
	
	function getid_commande(){
		return $this->id_commande;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	function getQty(){
		return $this->Qty;
	}
    function getPrix(){
		return $this->Prix;
	}
	function getdate_creation(){
		return $this->date_creation;
	}
	function getPtV(){
		return $this->PtV;
	}
	function getdate_expiration(){
		return $this->date_expiration;
	}
	function getetat_commande(){
		return $this->etat_commande;
	}
    
	function setid_commande($id_commande){
		$this->id_commande=$id_commande;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setQty($Qty){
		$this->Qty=$Qty;
	}
    function setPrix($Prix){
		$this->Prix=$Prix;
	}
	function setdate_creation($date_creation){
		$this->date_creation=$date_creation;
	}
	function setPtV($PtV){
		$this->PtV=$PtV;
	}
	function setdate_expiration($date_expiration){
		$this->date_expiration=$date_expiration;
	}
    function setetat_commande($etat_commande){
		$this->etat_commande=$etat_commande;
	}
	
}

?>