<?php
    class Card
    {
        protected $_name;
        protected $_description;

        public function __construct($name, $description)
        {
            $this->_name=$name;
            $this->_description=$description;
        }

        public function hello()
        {
            echo "je suis la carte ".$this->_name;
        }
    }

    class TrapCard extends Card
    {
        private $_effect;

        public function __construct($name,$description,$effect)
        {
            $this->_name=$name;
            $this->_description=$description;
            $this->_effect= $effect;
        }


        public function hello()
        {
             echo 'Nom:'.$this->_name.'<br>';
             echo 'Description: '.$this->_description.'<br>';
             echo 'EFfet: '.$this->_effect.'<br>';
        }
    }

    $src = new TrapCard("Claudio","Cest un petit garcon","tue le mort");
    echo $src->hello();
    $src1 = new Card('Claudio','Je suis le Roi');
    $src1->hello();
?>