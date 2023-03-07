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
            $this->setImageUrl($_imgUrl);
            $this->category = $_category;
            $this->quantity = $_quantity;
        }

        // check if image url loads, if not use placeholder image from assets
        private function setImageUrl($_imgUrl) {
            try {
                $headers = get_headers($_imgUrl);
                if (strpos($headers[0], '200') === false) {
                    throw new Exception('Image not found');
                }
                $this->imgUrl = $_imgUrl;
            } catch (Exception $e) {
                // If the image cannot be loaded, set the placeholder image URL
                $this->imgUrl = 'Assets/image-missing.webp';
            }
        }
    }
?>