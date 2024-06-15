<?php

$marque = "subaru";

class Voiture {
    private $marque;
    private $modele;
    private $couleur;
    private $annee;

    public function __construct($marque, $modele, $couleur, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->annee = $annee;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function setAnnee($annee) {
        if ($annee >= 1900 && $annee <= date("Y")) {
            $this->annee = $annee;
        } else {
            echo "Année de voiture invalide.";
        }
    }
}
?>