<?php

require_once __DIR__ . '/category.php';

class Products {
    public $name;
    public $price;
    public $description;
    public $image;
    public $category;

    function __construct($name, $price, $description, $image, $category){
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->image = $_image;
        $this->category = $_category;
    }
    
    public function getProduct() {
        return "Nome: $this->name, Prezzo: $this->price";
    }
  
}
?>