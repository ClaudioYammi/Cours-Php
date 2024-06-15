<?php
    require ('tp9.php');
    $src = new Compte(100);

    $src->Depot(20);
    $src->retirer(50);
    echo "votre solde est de ".$src->getCompte();
    ?>