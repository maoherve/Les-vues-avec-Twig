<?php

namespace App;

//use Twig\Environment;
//use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$products = ['tryndamère', 'Echo', 'Evelynn', 'Jax', 'MAMÈRE'];


$loader = new \Twig\Loader\FilesystemLoader('src/Views');
$twig = new \Twig\Environment($loader);
echo $twig->render('index.html.twig',['products' => $products]);




