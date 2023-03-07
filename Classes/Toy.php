<?php 
    require_once __DIR__ . '/Product.php';

    class Toy extends Product{
        public $dimensions;
        public $color;
        public $material;
        public $type;

        public function __construct(string $_name, string $_description, float $_price, string $_imgUrl, Category $_category, int $_quantity, string $_dimensions ,string $_color, string $_material, string $_type)
        {
            parent::__construct($_name , $_description , $_price , $_imgUrl , $_category , $_quantity);

            $this->dimensions = $_dimensions;
            $this->color = $_color;
            $this->material = $_material;
            $this->type = $_type;
            
        }
    }
    
?>