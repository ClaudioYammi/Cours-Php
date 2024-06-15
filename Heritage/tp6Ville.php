<?php
    class Ville {
        private $ville;
        public function __construct($ville)
        {
            $this->ville=$ville;
        }

        public function getNom() {
            return $this->ville;
        }

        public function setNom($v) {
            return $this->ville=$v;
        }
    }


    class Pays extends Ville {
        public $pays;
        function __construct($ville,$pays)
        {
            parent::__construct($ville);
            $this->pays=$pays;
        }

        function Pays($p,$v){
            return $this->pays=$p;
            return $this->ville=$v;
        }

        function getPays(){
            return $this->pays;
        }

        function setPays($p){
            return $this->pays=$p;
        }

        function toString(){
            return $this->ville." est la capital de ".$this->pays;
        }
    }

    $res = new Pays('Antananarivo','Madagascar');
    echo $res->toString();
?>