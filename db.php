<?php
require_once __DIR__ . '/Models/category.php';
require_once __DIR__ . '/Models/products.php';
require_once __DIR__ . '/Models/food.php';
require_once __DIR__ . '/Models/toys.php';

$categories = [
    $dog = new Category('dog', 'fa-dog'),
    $cat = new Category('cat', 'fa-cat')
];

$croccantini= new Food("Croccantini", 18, "Ottimi per cani di taglia grande, è un alimento completo integrato con ingredienti funzionali in grado di favorire il benessere generale dell’animale.", "./img/crocchette.jpg", $categories[0],'pollo', 'Trainer');
$ball= new Toys("Palla", 7, "È una pallina divertende per cani, con le puntine di gomma si divertirà a mordicchiare il gioco", "./img/palla.jpg", $categories[0], 'gomma', 'verde');
$collars= new Products("Collare", 11, "È un collare per gatti, con una semplice chiusura a sgancio rapido ed un campanellino per trovare facilmente il tuo gatto", "./img/collare.jpg", $categories[1]);
$cuccia= new Products("Cuccia", 24, "La cuccia offre al tuo cane una superficie d’appoggio estremamente comoda e confortevole per il relax.", "./img/cuccia.png", $categories[0]);

$products = [
    $croccantini,
    $ball,
    $collars,
    $cuccia
];

    // ECCEZIONE
    try{
        $ball -> setDiscount(80);
    } catch (Exception $error){
        echo $error->getMessage();
    }