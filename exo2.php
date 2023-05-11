<?php

class Ville{

    private $nom;
    private $departement;

    public function __construct($nom=null, $departement=null){
        $this->nom=$nom;
        $this->departement=$departement;                                                      
    }

    public function getInfo(){
        return "La ville de ".$this->nom." est dans le département : ".$this->departement."<br>";
    }

    public function getNom()
    {
        return $this->nom ;
    }

    public function setNom($nom)
    {
        $this->nom = $nom ;
    }

    public function getDepartement()
    {
        return $this->departement ;
    }

    public function setDepartement($departement)
    {
        $this->departement = $departement ;
    }

}
///Création d'objets avec appel au constructeur
$ville1 = new Ville("Nantes","Loire Atlantique");
$ville2 = new Ville("Lyon","Rhône");
$ville3 = new Ville();
$ville3->setNom("Cannes");
$ville3->setDepartement("Alpes-Maritimes");

echo $ville1->getinfo();
echo $ville2->getinfo();
echo $ville3->getinfo();