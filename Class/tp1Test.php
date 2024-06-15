<?php
    //1.Importation
    require ('tp1.php');

    //2.Création de l'objet ou instance
    $c = new cercle(12);

    //3.Appel methode
    $c ->setRayon(7);
    //$g-> surface(14);

    echo "Resultat perimètre: ".$c->perimètre()."<br>";
    echo "Resultat surface: ".$c->surface();

?>