<?php
    class Voiture {
        public $marque;
        public $puissance;
            function __construct($marque, $puissance){
            $this->marque = $marque;
            $this->puissance = $puissance;
            }
            function getMarque() {
                return $this->marque;
            } //retourne la marque

            function getPuissance() {
                return $this->puissance;
            }
        }
        
       $v = new Voiture("Renault","6CV");
       echo "la marque est de {$v->getMarque()} avec une puissance de {$v->getPuissance()} <br>";

       class Electrique extends Voiture {
        public $volt;
            function __construct($marque, $puissance, $volt){
            parent::__construct($marque, $puissance);
            $this->volt = $volt;
            }
            function getVolt(){
                return $this->volt;
            }
        }
       $ve = new Electrique("Renault","6CV","120V");
       echo "la voiture a une marque {$ve->getMarque()} avec une puissance de {$ve->getPuissance()} <br>";
       echo "et un voltage de {$ve->getVolt()}";
?>