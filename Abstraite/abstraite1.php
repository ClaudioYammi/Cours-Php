<?php
    abstract class Forme {
        abstract public function calculerAire();
    }
    
    class Rectangle extends Forme {
        private $largeur;
        private $hauteur;
    
        public function __construct($largeur, $hauteur) {
            $this->largeur = $largeur;
            $this->hauteur = $hauteur;
        }
    
        public function calculerAire() {
            return $this->largeur * $this->hauteur."<br>";
        }
    }
    
    class Cercle extends Forme {
        private $rayon;
    
        public function __construct($rayon) {
            $this->rayon = $rayon;
        }
    
        public function calculerAire() {
            return pi() * pow($this->rayon, 2)."<br>";
        }
    }
    
    $rectangle = new Rectangle(5, 3);
    echo $rectangle->calculerAire(); // Affiche : 15
    
    $cercle = new Cercle(2);
    echo $cercle->calculerAire(); // Affiche : 12.566370614359

?>