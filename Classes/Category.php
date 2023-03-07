<?php 
    class Category{
        public $category;

        public function __construct(string $_category)
        {
            if ($_category === 'dog')
            $this->category = $_category;

            else if ($_category === 'cat') {
                $this->category = $_category;
            };
        }
    }



?>