<?php // set modifier, get maka
    class supermarcher{
        private $PrixUnitaire;
        private $Quantiter;
        public function __construct($P,$Q)
        {
            $this->PrixUnitaire = $P;
            $this->Quantiter = $Q;
        }

        public function getPrixUnitaire(){
            return $this->PrixUnitaire;
        }

        public function setPrixUnitaire($P){
            return $this->PrixUnitaire = $P;
        }

        public function getQuantiter(){
            return $this->Quantiter;
        }

        public function setQuantiter($Q){
            return $this->Quantiter = $Q;
        }
//$this-> ny dikanio dia alaivo tyh , tena
        public function MontantTotal(){
            return $this->PrixUnitaire*$this->Quantiter;
        }
    }
?>