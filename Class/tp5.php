<?php
class hotel{
    private $Chambre;
    private $PrixChambre;
    private $NbPersonne;
        public function __construct($C,$PC,$NP)
        {
            $this->Chambre = $C;
            $this->PrixChambre = $PC;
            $this->NbPersonne = $NP;
        }

        public function getChambre(){
            return $this->Chambre;
        }

        public function getPrixChambre(){
            return $this->PrixChambre;
        }

        public function getNbPersonne(){
            return $this->NbPersonne;
        }

        public function setChambre($C){
            return $this->Chambre=$C;
        }

        public function setPrixChambre($PC){
            return $this->PrixChambre=$PC;
        }

        public function setNbPersonne($NP){
            return $this->NbPersonne=$NP;
        }

        public function MontantTotal(){
            echo "Montant total est de ".($this->PrixChambre*$this->NbPersonne);
        }
}

?>