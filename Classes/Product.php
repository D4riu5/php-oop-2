<?php
    class Product {
        public $name;
        public $description;
        public $price;
        public $imgUrl;
        public $category;
        public $quantity;

        public function __construct(string $_name, string $_description, float $_price, string $_imgUrl, Category $_category, int $_quantity)
        {
            $this->name = $_name;
            $this->description = $_description;
            $this->price = $_price;
            $this->imgUrl = $_imgUrl;
            $this->category = $_category;
            $this->quantity = $_quantity;
        }
    }
?>