<?php
    class IMC {
        private $Poids;
        private $Taille;


        public function __construct($p,$t)
        {
            $this->Poids=$p;
            $this->Taille=$t;
        }

        public function getTaille(){
            return $this->Taille;
        }

        public function setTaille($t){
            return $this->Taille=$t;
        }

        public function getPoids(){
            return $this->Poids;
        }

        public function setPoids($p){
            return $this->Poids=$p;
        }

        public function IMC(){
            $IMC=$this->Poids/($this->Taille*$this->Taille);
            echo "Votre IMC ".$IMC."<br>";
            if($IMC<18.5){
                echo "Vous êtes Maigre";
            } else if ($IMC<25) {
                echo "Vous êtes Normale <br>";
            } else if ($IMC<30) {
                echo "Vous êtes Surpoids <br>";
            } else {
                echo "Vous êtes Obèse";
            }
            return ;
        }
    }


?>