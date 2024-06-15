<?php
    class Compte{
        private $solde;
        public function __construct($s)
        {
            $this->solde=$s;
        }
        public function setCompte($s){
            return $this->solde=$s;
        }
        public function getCompte(){
            return $this->solde;
        }

        public function Depot($d){
            $this->solde +=$d;
        }

        public function Retirer($r){
            $this->solde-=$r;
        }

    }

?>