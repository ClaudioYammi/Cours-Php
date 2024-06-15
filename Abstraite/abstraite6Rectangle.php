<?php
    class Rectangle extends Geometrie{
        protected $Longueur;
        protected $largeur;
        public function __construct($L,$l)
        {
            $this->Longueur=$L;
            $this->largeur=$l;
        }

        public function setLongueur($L){
            $this->Longueur=$L;
        }

        public function getLongueur(){
            $this->Longueur;
        }

        public function getSurface()
        {
            $tt = $this->Longueur * $this->largeur;
            return $tt;
        }

        public function getCouleur()
        {
            return "Rouge";
        }

        public function getPerimetre()
        {
            $total = ($this->largeur+ $this->Longueur) * 2;
            return $total ;
        }

        public function toString(){
            return "Pour le rectangle, <br> la surface est de ". $this->getSurface()." le perimetre ". $this->getPerimetre()." avec une couleur ". $this->getCouleur()."<br>";
        }
    }

?>