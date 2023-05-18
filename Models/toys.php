<?php

require_once __DIR__ . '/product.php';

class Toys extends Products {
    public $materials;
    public $colors;

    function __construct($name, $price, $description, $image, $category, $materials, $colors){
        parent::__construct($name, $price, $description, $image, $category);
        $this->materials = $_materials;
        $this->colors = $_colors;
    }

}
?>