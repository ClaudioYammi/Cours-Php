<?php

    require_once 'abstraite6Cercle.php';
    require_once 'abstraite6Rectangle.php';

    $Rect = new Rectangle(12,5);
    $Cerc = new Cercle(12);

    echo $Rect->toString();
    echo $Cerc->toString();

?>