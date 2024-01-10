<?php
namespace App\Model;

class Danseuse {
    private $nom;
    private $prenom;
    private $dateN;

    /*
    public function __construct($nom, $prenom, $dateN)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateN = $dateN;
    }
    */
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDateN()
    {
        return $this->dateN;
    }
    public function setDateN(string $dateN)
    {
        $this->dateN = $dateN;
    }

    public function getNomComplet()
    {
        return $this->prenom . ' ' . $this->nom; 
    }
}