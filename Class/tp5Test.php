<?php
    require ('tp5.php');

    $src = new hotel(0,0,0);

    $src->setPrixChambre(2000);
    $src->setNbPersonne(12);

    echo $src->MontantTotal();

?>