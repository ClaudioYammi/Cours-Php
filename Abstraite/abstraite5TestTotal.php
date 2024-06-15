<?php

    require_once 'abstraite5TEst.php';
    require_once 'abstraite5TEstH.php';

    $src = new Femme('Amelia');
    echo $src->toString();

    $src1 = new Homme('Clo');
    echo $src1->toString();

?>