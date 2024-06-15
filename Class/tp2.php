<?php
    class Triangle{
        protected $base;
        protected $hauteur;
        public function __construct($b,$h)
        {
            $this->base = $b;
            $this->hauteur = $h;
        }


        public function getBase(){
            return $this->base;
        }

        public function setBase($b){
            return $this->base=$b;
        }

        public function getHauteur(){
            return $this->hauteur;
        }

        public function setHauteur($h){
            return $this->hauteur=$h;
        }

        public function CalculerAire(){
            return $this->base*$this->hauteur/2;
        }
    }
?>