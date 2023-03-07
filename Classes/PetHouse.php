<?php 
    require_once __DIR__ . '/Product.php';

    class PetHouse extends Product{
        public $color;
        public $material;
        public $type;

        public function __construct(string $_name, string $_description, float $_price, string $_imgUrl, Category $_category, int $_quantity, string $_color, string $_material, string $_type)
        {
            parent::__construct($_name , $_description , $_price , $_imgUrl , $_category , $_quantity);

            $this->color = $_color;
            $this->material = $_material;
            $this->type = $_type;
            
        }
    }  
?>