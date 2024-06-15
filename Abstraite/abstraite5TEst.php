<?php

    require_once 'abstraite5.php';
    class Femme extends etreHumain{
        private $nom;
        public function __construct($nom)
        {
            $this->nom=$nom;
        }

        public function getNom(){
            $this->nom;
        }

        public function setNom($nom){
            $this->nom=$nom;
        }

        public function sexe(){
            return "Féminin";
        }

        public function sport(){
            return "Course";
        }

        public function toString(){
            return $this->nom." est de sexe ".$this->sexe()." et pratique le sport ".$this->sport()."<br>";
        }
    }

?>