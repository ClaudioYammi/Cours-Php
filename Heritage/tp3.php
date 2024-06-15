<?php
    class animaux
    {
        protected $nom;
        public function __construct($nom)
        {
            $this->nom=$nom;
        }
    }

    class mamifère extends animaux
    {
        protected $Crie;
        public function __construct($nom, $Crie)
        {
            $this->nom=$nom;
            $this->Crie=$Crie;
        }

        public function hello()
        {
            echo $this->nom."<br>";
            echo $this->Crie."<br>";
        }
       
    }

    class reptile extends animaux
    {
        protected $Crie;
        public function __construct($nom, $Crie)
        {
            $this->nom=$nom;
            $this->Crie=$Crie;
        }

        public function hello()
        {
            echo $this->nom."<br>";
            echo $this->Crie."<br>";
        }
    }


    $src = new mamifère("DIno","Miaouhh");
    echo $src->hello();


?>