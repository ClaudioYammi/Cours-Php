<?php
    //1.importation
    require ('tp2.php');

    //2.créationde l'instance
    $c = new Triangle(10,20);


    //3.appel à la methode modifier
    $c -> setBase(12);
    $c -> setHauteur(270);
    
    echo "Hauteur : ".$c->getHauteur()."<br>";
    echo "Base : ".$c->getBase()."<br>";
    echo "resultat : ".$c->CalculerAire()."<br>";

    


?>