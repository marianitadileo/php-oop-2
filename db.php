<?php
require_once __DIR__ . '/Models/category.php';
require_once __DIR__ . '/Models/products.php';
require_once __DIR__ . '/Models/food.php';
require_once __DIR__ . '/Models/toys.php';

$categories = [
    $dog = new Category('dog', 'fa-dog'),
    $cat = new Category;('cat', 'fa-cat');
]

$croccantini= new Food("croccantini", 18, "ottimi per taglia grande", "dog", "p", "pollo", "trainer");
$ball= new Toys("ball", 7, "gioco per cani", "b", "dog", "Polypropylene", "blue");
$collars= new Products("collars", 12, "collari per cani e gatti", "n", "dogs and cats");

$products = [
    $croccantini,
    $ball,
    $collars
];
?>