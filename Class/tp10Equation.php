<?php
    class equation{
        private $a,$b,$c;
        public function __construct($a,$b,$c)
        {
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }

        public function seta($a){
            return $this->a=$a;
        }

        public function setb($b){
            return $this->b=$b;
        }

        public function setc($c){
            return $this->c=$c;
        }

        public function Equation(){
            $rs=($this->b*$this->b) - 4*$this->a*$this->c;
            if($rs>0){
                echo "l'équation a deux solutions réelles distinctes:".$rs."<br>";
                $s1=(-$this->b - sqrt(($this->b*$this->b)-4*$this->a*$this->c)) / (2*$this->a);
                $s1f =number_format($s1,2);
                $s2=(-$this->b + sqrt(($this->b*$this->b)-4*$this->a*$this->c)) / (2*$this->a);
                $s2f =number_format($s2,2);
                echo "Solution 1: ".$s1f."<br>"."Solution 2: ".$s2f;
            }elseif($rs===0){
                echo "l'équation a une solution réelle double: ".$rs;
            }elseif($rs<0){
                echo "l'équation n'a pas de solution réelle. Dans ce cas, les solutions sont des nombres complexes: ".$rs;
            }else{
                echo "inconnu: ".$rs;
            }
            return;
        }
    }
?>