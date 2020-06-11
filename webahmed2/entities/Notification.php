<?PHP
class Notification{
	private $id_notification;
	private $type_notification;
	private $contenu_notification;
	private $creation_notification;
        private $etat_notification;
	function __construct($type_notification,$contenu_notification){
		$this->type_notification=$type_notification;
		$this->contenu_notification=$contenu_notification;       
	}
	
	
	
	function getid_notification(){
		return $this->id_notification;
	}
	function gettype_notification(){
		return $this->type_notification;
	}
	function getcontenu_notification(){
		return $this->contenu_notification;
	}
	function getcreation_notification(){
		return $this->creation_notification;
	}
    function getetat_notification(){
		return $this->etat_notification;
	}
    
	function setid_notification($id_notification){
		$this->id_notification=$id_notification;
	}
	function settype_notification($type_notification){
		$this->type_notification=$type_notification;
	}
	function setcontenu_notification($contenu_notification){
		$this->contenu_notification=$contenu_notification;
	}
	function setcreation_notification($creation_notification){
		$this->creation_notification=$creation_notification;
	}
    function setetat_notification($etat_notification){
		$this->etat_notification=$etat_notification;
	}
	
}

?>