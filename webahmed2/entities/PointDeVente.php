<?php

class PtV{
	private $id_PtV;
	private $Adresse;
	function __construct($id_PtV,$Adresse){
		$this->id_PtV=$id_PtV;
		$this->Adresse=$Adresse;
	}
	
	function getid_PtV(){
		return $this->id_PtV;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	
	function setid_PtV($id_PtV){
		$this->id_PtV=$id_PtV;
	}
	function setAdresse($Adresse){
		$this->Adresse=$Adresse;
	}
	
}

?>