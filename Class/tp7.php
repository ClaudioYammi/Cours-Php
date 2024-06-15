<?php
    class Compte{
        private $solde;
        public function __construct($s)
        {
           $this->solde=$s;
        }

        public function getSolde(){
            return $this->solde;
        }

        public function setSolde($s){
            $this->solde=$s;  
        }

        public function deposer($s){
            $this->solde += $s;
        }

        public function retirer($s){
            if($s <= $this->solde){
                $this->solde -=$s;

            }else{
                echo "solde insuffisant";
            }
            return $this->solde;
        }

        public function toString(){
            return $this->solde;
        }
    }

?>