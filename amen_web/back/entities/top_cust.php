<?php
class customer{
    private $id_best;
    private $id_client;
    private $nom;
    private $prenom;
    private $nbr_visites;

    public function __construct($id_best,$id_client,$nom,$prenom,$nbr_visites)
    {
        $this->id_best=$id_best;
        $this->id_client=$id_client;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->nbr_visites=$nbr_visites;
    }
    // Retourner les champs d'un employé...
    function getid_best(){return $this->id_best;}
    function getid_client(){return $this->id_client;}
    function getnom(){return $this->nom;}
    function getprenom(){return $this->prenom;}
    function getnbr_visites(){return $this->nbr_visites;}
    

    
}
?>
