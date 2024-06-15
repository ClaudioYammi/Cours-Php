<?php
    //1.importation
    require ('tp3.php');

    //2.créationde l'instance
    $c = new carrer(10,20);


    //3.appel à la methode modifier
    $c -> setCoté1(12);
    $c -> setCoté2(270);
    
    echo "le périmètre : ".$c->perimètre()."<br>";
    echo "l'air d'un carrer : ".$c->Coter();
 

?>