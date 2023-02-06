<?php
require_once "models/database.php";
require_once "controllers/productController.php";
$ctr = $_GET['ctr'] ?? '';

switch ($ctr) {
    case '':
    case 'home':
        include "views/home.php";
        break;
    case 'about':
        include "views/about.php";
        break;
    case 'contact':
        include "views/contact.php";
        break;
    case 'product':
        indexProduct();
        break;
    case 'add-product':
        addProduct();
        break;
    case 'store-product':
        storeProduct();
        break;
    default:
        include "views/404.php";
        break;
}
