<?php

require_once __DIR__ . '/category.php';


class Products {
    public $name;
    public $price;
    public $description;
    public $image;
    public $category;
    protected $discount;
    
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

    public function setDiscount($discount){
        if ($discount > 50) {
            throw new Exception("errore sconto");
        } else {
            $this->discount = 30;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getPrice(){
        return $this->price - $this->price * $this->discount / 100;
    }
}
?>