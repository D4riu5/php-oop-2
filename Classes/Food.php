<?php 
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/../Traits/Type.php';

    class Food extends Product{
        public $kiloCalories;
        public $weight;
        
        use Type;

        public function __construct(string $_name, string $_description, float $_price, string $_imgUrl, Category $_category, int $_quantity, int $_kiloCalories, float $_weight, string $_type)
        {
            parent::__construct($_name , $_description , $_price , $_imgUrl , $_category , $_quantity);

            $this->kiloCalories = $_kiloCalories;
            $this->weight = $_weight;
            $this->type = $_type;
            
        }
    }
    
?>