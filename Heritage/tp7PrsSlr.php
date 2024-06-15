<?php
    class Personne {
        public $nom;
        public $nbEnfant;
        function __construct($n,$nb){
            $this->nom=$n;
            $this->nbEnfant=$nb;
        }

        function getNom(){
            return $this->nom;
        }

        function setNom($n){
            return $this->nom=$n;
        }

        function getNb(){
            return $this->nbEnfant;
        }

        function setNb(){
            return $this->nbEnfant;
        }
    }

    class Salaire extends Personne {
        protected $salaire;
        function __construct($n,$nb,$s){
            parent::__construct($n,$nb);
            $this->salaire=$s;
        }

        function getSalaire(){
            return $this->salaire;
        }

        function setSalaire($s){
            return $this->salaire=$s;
        }

        function getPrime(){
            $total = ($this->salaire*$this->nbEnfant*5)/100;
            return $total;
        }

        function toString(){
            return "la prime de ".$this->nom." avec ".$this->nbEnfant." enfant est ".$this->getPrime()." Ar "."<br>"."Salaire ".$this->getSalaire()." Ariary";   
        }
    }

    $src = new Salaire('Claudio',12,200000);
    echo $src-> toString();
?>