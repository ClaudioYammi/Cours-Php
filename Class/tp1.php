<?php


class cercle{ // ze ao anatiny classe
    private $rayon;
    public function __construct($r)//manome valeur anle attribut
    {
        $this->rayon = $r;//$this = CEci //enao rayon a egal zao , ohatra 0
    }

    public function getRayon(){
        return $this->rayon;
    }
    
    public function setRayon($r){ //valeurs vaovao modifier
        $this->rayon=$r;
    }

    public function surface(){
        return pi()*$this->rayon*$this->rayon;// resultat mivoaka
    }

    public function perimètre(){
        return 2*pi()*$this->rayon;// resultat mivoaka
    }
}

?>