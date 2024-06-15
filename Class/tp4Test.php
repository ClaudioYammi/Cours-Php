<?php
    require ('tp4.php');
    $rs = new supermarcher(400,2);
    $rs->setPrixUnitaire(1200);
    $rs->setQuantiter(8);
    echo "Prix Unitaire : ".$rs->getPrixUnitaire()." Ariary <br>";
    echo "Quantité : ".$rs->getQuantiter()." pièces <br>";
    echo "Montant : ".$rs->MontantTotal()." Ariary <br>";
?>