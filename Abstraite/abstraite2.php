<?php

    abstract class vehicule
    {
        protected $marque;
        public function __construct($marque)
        {
            $this->marque=$marque;
        }

        abstract public function voi(); // amn maha abstract anazy dia tsy misy method ao anatiny
    }


    class Voitured extends vehicule
    {
        
        public function voi() // tsy maintsy apparaitre ao amn class fille ilay abstract  
        {
            return "la voiture {$this->marque} demarre <br>";
        }   
    }

    class Moto extends vehicule
    {
        public function voi()
        {
            return "la moto {$this->marque} demarre <br>";
        }
    }

    $cars = new Voitured ("BMW");
    echo $cars->voi();

    $motor = new Moto("Honda");
    echo $motor->voi();
?>