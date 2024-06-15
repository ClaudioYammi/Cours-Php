<?php
    require ('tp7.php');


    $src = new Compte(500);


    $src->Deposer(400);
    $src->Retirer(300);

    echo $src->toString();

?>