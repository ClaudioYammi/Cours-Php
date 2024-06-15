<?php
    class factorielle{
        private $F;
        public function __construct($F)
        {
            $this->F=$F; 
        }

        public function setF(){
            $this->F;
        }

        public function Fact(){
            $n =$this->F;
            $b=1;
            do{
                $b = $b*$n;
                $n--;
            }while($n>0);
            echo"factorielle = ".$b."<br>";
        }

    }
?>