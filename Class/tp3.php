<?php
    class carrer{
        private $coté1;
        private $coté2;
        private $coté;
            public function __constructeur($r1,$r2){
                $this ->coté1=$r1;
                $this ->coté2=$r2;
            }

            public function getCoté1(){

            }
            public function setCoté1($r1){
                return $this->coté1=$r1;
            }

            public function Coter(){
                return $this->coté1*$this->coté2;
            }

            public function getCoté2(){

            }
            public function setCoté2($r2){
                return $this->coté2=$r2;
            }

            public function perimètre(){
                return $this->coté1+$this->coté2/2;
            }
        
    }

?>