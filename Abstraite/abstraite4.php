<?php
    abstract class Calculateur{
        protected $a;
        protected $b;
        public function __construct($a,$b)
        {
            $this->a=$a;
            $this->b=$b;
        }

        abstract public function calcul();
    }

    class Addition extends Calculateur{
        public function calcul()
        {   
            return'la soustraction: '.$this->a+$this->b."<br>"; 
        }
    }

    class Soustraction extends Calculateur{
        public function calcul()
        {   if($this->a<$this->b){
                $s=$this->b-$this->a;
            }else{$s=$this->a-$this->b;
        }
            return 'la soustraction: '.$s."<br>";
        }
    }

    class Multiplication extends Calculateur{
        public function calcul()
        {
            return 'la multiplication est: '.$this->a*$this->b;
        }
    }

    class Division extends Calculateur{
        public function calcul()
        {   
            if ($this->a<$this->b) {
                $s=$this->b/$this->b;
            } else {
                $s=$this->a/$this->b;
            }
            return 'la division est: '.$s;
        }
    }

    $ad = new Addition(10,10);
    echo $ad->calcul();
    $so = new Soustraction(10,10);
    echo $so->calcul();
    $mu = new Multiplication(10,10);
    echo $mu->calcul();
    $di = new Division(10,10);
    echo $di->calcul();
?>