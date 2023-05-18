<?php

require_once __DIR__ . '/products.php';

class Food extends Products {
    public $ingredients;
    public $brand;

    function __construct($name, $price, $description, $image, $category, $ingredients, $brand){
        parent::__construct($name, $price, $description, $image, $category);
        $this->ingredients = $_ingredients;
        $this->brand = $_brand;
    }

  
}
?>