<?php
    class Gestionnaire{
        private $Nom;
        private $Description;
        public function __construct($Nom,$Description)
        {
            $this->Nom=$Nom;
            $this->Description=$Description;
        }

        public function hello(){
            echo " je suis ".$this->Nom;
        }
    }

    class GetionnaireCaisse extends Gestionnaire{
          
    }

    class GetionnaireTable extends Gestionnaire{
        
    }

    class GestionnaireProduit extends Gestionnaire{

    }


?>