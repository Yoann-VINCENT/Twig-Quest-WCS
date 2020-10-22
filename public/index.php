<?php

require (__DIR__ . '/../vendor/autoload.php');

$products = ['AK-47', 'M16', 'Steyr-Aug', 'Famas', 'Desert-Eagle', 'P90', 'G36', 'Barret'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader);

echo $twig->render('index.html.twig', [
    'products' => $products,
]);