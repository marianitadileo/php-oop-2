<?php

require_once __DIR__ . '/category.php';

class Products {
    public $name;
    public $price;
    public $description;
    public $image;
    public $category;

    function __construct($name, $price, $description, $image, $category){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
    }
    
    public function getProduct() {
        return "Nome: $this->name, Prezzo: $this->price";
    }
  
}
?>