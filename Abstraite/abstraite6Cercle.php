<?php
    require 'abstraite6.php';
    class Cercle extends Geometrie{
        protected $rayon;
        public function __construct($r)
        {
            $this->rayon=$r;
        }

        public function setRayon($r){
            $this->rayon=$r;
        }

        public function getRayon(){
            $this->rayon;
        }

        public function getCouleur()
        {
            return "Magenta";
        }

        public function getSurface()
        {
            $gS = $this->rayon*$this->rayon*pi();
            return $gS;
        }

        public function getPerimetre()
        {
            $gP = 2 * pi() * $this->rayon;
            return $gP ;
        }

        public function toString(){
            return "Pour le cercle, <br> la surface est de ".$this->getSurface()." et le perimetre est ". $this->getPerimetre()." avec une couleur ". $this->getCouleur()."<br>";
        }
    }

?>