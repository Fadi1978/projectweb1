<?PHP
class adresse{
	private $id;
	private $adresse;
	private $postal;
	private $city;
	function __construct($id,$adresse,$postal,$city){
        $this->id=$id;
		$this->adresse=$adresse;
		$this->postal=$postal;
		$this->city=$city;
	}
	function getId(){
		return $this->id;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getPostal(){
		return $this->postal;
	}
	function getCity(){
		return $this->city;
	}
    function setId($id){
		$this->id=$id;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setPostal($postal){
		$this->postal=$postal;
	}
	function setCity($city){
		$this->city=$city;
	}
	
}

?>