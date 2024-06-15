<?php
        abstract class hotel{//rehefa miheriter class abstract dia ts maints asina implementatio,
            protected $nom;
            protected $prix;
            public function __construct($n,$p)
            {
                $this->nom=$n;
                $this->prix=$p;
            }

            abstract public function son_nom();
            abstract public function son_prix();
        }

        class HotelNormal extends hotel{
            public function son_nom()
            {
                return "le nom de l'hotel Normal est ".$this->nom."<br>";
            }
            public function son_prix()
            {
                return "le prix de l'hotel Normal est de ".$this->prix."<br>";
            }
        }

        class HotelVip extends hotel{
            public function son_nom(){
                return "le nom de l'hotel {$this->nom} VIP est <br>";
            }
            public function son_prix()
            {
                return "le nom de l'hotel {$this->prix} VIP est <br>";
            }
        }

        $src = new HotelNormal("Bengalow",2000);

        echo $src->son_nom();
        echo $src->son_prix();

        $src2 = new HotelVip('ProxMAx',400000);

        echo $src2->son_nom();
        echo $src2->son_prix();


?>