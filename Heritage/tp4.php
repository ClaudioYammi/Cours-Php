<?php
    class Mère
    {
        protected $nom;

        public function __construct($nom)
        {
            $this->nom=$nom;
        }

        public function hello()  //si on met final après hello() il diras que ses le dernier 
        {
            echo "Je suis la mère de: ".$this->nom."<br>";
        }
    }

final class fille extends Mère //on ne peut plus mettre de d'autre
    {
        protected $other_name;
        public function __construct($nom,$other_name)
        {
            parent::__construct($nom);
            $this->other_name=$other_name;
        }

        public function hello()
        {
            echo "Je suis la fille de ".$this->nom." et je m'appelle ".$this->other_name."<br>";
        }
    }

    $nv1 = new Mère('Clarita');
    $nv1->hello();


    $nv = new fille('Claoi','Fratsesca');

    $nv->hello();
?>