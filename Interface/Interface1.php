<?php

use Cercle as GlobalCercle;
use Rectangle as GlobalRectangle;

    interface Form{
        public function CalculAir();
        public function CalculPerimètre();
    }

    class Rectangle implements Form {
        protected $largeur;
        protected $hauteur;

        public function __construct($H,$l)  
        {
            $this->hauteur=$H;
            $this->largeur=$l;
        }
        
        public function CalculAir()
        {
            return $this->hauteur*$this->largeur;
        }

        public function CalculPerimètre()
        {
            return 2 * ($this->largeur+$this->hauteur);
        }

    }

    class Cercle  implements Form{
        protected $rayon;

        public function __construct($r)
        {
            $this->rayon = $r;
        }

        public function CalculAir()
        {
            return pi()*pow($this->rayon, 2);
        }

        public function CalculPerimètre()
        {
            return 2*pi()*$this->rayon;
        }

    }

    $rct = new GlobalRectangle(14,12);
    echo "la reponse a la Calcul de l'air est ".$rct->CalculAir()."<br>";
    echo "la reponse a la Calcul du perimetre est ".$rct->CalculPerimètre()."<br>";

    $Crc = new GlobalCercle(45);
    echo "la reponse a la Calcul de l'air est ".$Crc->CalculAir()."<br>";
    echo "la reponse a la Calcul du perimetre est ".$Crc->CalculPerimètre()."<br>";
    
?>