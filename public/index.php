<?php
require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

$products = [
    'product1'=> ['name' => 'produit1'],
    'product2'=> ['name' => 'produit2'],
    'product3'=> ['name' => 'produit3'],
    'product4'=> ['name' => 'produit4'],
    'product5'=> ['name' => 'produit5'],
];
echo $twig->render('index.html.twig', ['products' => $products]);