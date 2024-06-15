<?php
    interface Vehicule {
        public function demarrer();
        public function accelerer($vitesse);
        public function frein();    
        
    }

    abstract class VehiculeTerrestre implements Vehicule { // interface ilay vehicule
        private $marque;
        private $VitesseActuelle;

        public function __construct($marque){
            $this->marque=$marque;
            $this->VitesseActuelle=0;
        }

        public function demarrer()
        {
            return " le vehicule {$this->marque} demarre ";
        }

        public function accelerer($vitesse)
        {
            $this->VitesseActuelle += $vitesse;
            return "le véhicule {$this->marque} accelère à une vitesse de {$this->VitesseActuelle} km/h";
        }
        abstract public function frein();
    }

    abstract class MotoTerrestre implements Vehicule {
        private $marque;
        private $VitesseActuelle;

        public function __construct($marque){
            $this->marque=$marque;
            $this->VitesseActuelle=0;
        }

        public function demarrer()
        {
            return " le vehicule {$this->marque} demarre ";
        }

        public function accelerer($vitesse)
        {
            $this->VitesseActuelle += $vitesse;
            return "le véhicule {$this->marque} accelère à une vitesse de {$this->VitesseActuelle} km/h";
        }
        abstract public function frein();
    }

    
?>