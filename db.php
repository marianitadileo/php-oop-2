<?php
require_once __DIR__ . '/Models/category.php';
require_once __DIR__ . '/Models/products.php';
require_once __DIR__ . '/Models/food.php';
require_once __DIR__ . '/Models/toys.php';

$categories = [
    $dog = new Category('dog', 'fa-dog'),
    $cat = new Category('cat', 'fa-cat')
];

$croccantini= new Food("croccantini", 18, "ottimi per taglia grande", "image", $categories[0],'sit' ,'test');
$ball= new Toys("ball", 7, "gioco per cani", "image",$categories[1], 'lorem', 'ipsum');
$collars= new Products("collars", 12, "collari per cani e gatti", "image",$categories[0]);

$products = [
    $croccantini,
    $ball,
    $collars
];
?>