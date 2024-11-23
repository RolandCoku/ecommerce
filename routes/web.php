<?php

include __DIR__ . '/../controllers/ProductController.php';

$productController = new ProductController();

$route = $_SERVER['REQUEST_URI'];

echo $route;

if ($route === '/ecommerce/products') {
    $productController->index();
} else {
    echo '404';
}