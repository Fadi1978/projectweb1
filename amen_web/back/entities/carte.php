<?php

class Carte {
    
    private $id_carte;
    private $email;
    private $nb_point;
    private $date_creation;
    
    function __construct ($email)
    {
     $this->email=$email;
     


    }
    function getIDcarte() {return $this->id_carte;}
    function getIDclient() {return $this->email;}
    function getNbpoint() {return $this->nb_point;}
    function getDate() {return $this->date_creation;}
    
    
    
    function setIDcarte ($id_carte) {$this->id_carte=$id_carte;}
    
    function setIDclient ($email){$this->id_client=$email;}
    
    function setNbpoint ($nb_point){$this->nb_point=$nb_point;}
    
    function setDate ($date_creation){$this->date_creation=$date_creation;}
    


}
?>