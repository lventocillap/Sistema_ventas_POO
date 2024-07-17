<?php

declare(strict_types=1);

require_once 'Product.php';
require_once 'client.php';
require_once 'Sale.php';
require_once 'Inventory.php';
require_once 'StockProduct.php';
require_once 'SaleRecord.php';

$product1 = new StockProduct(10, "Leche", "Gloria", 5, 6);
$product2 = new StockProduct(10, "Jamonada", "Zuiza", 6, 8);
$product3 = new StockProduct(1, "Mantequilla", "Manty", 2.5, 8);

$client = new Client(01, "Luis", "12345678");

$products = array($product1, $product2, $product3);

$sale1 = new Sale($product1, 2);
$sale2 = new Sale($product2, 3);
$sale3 = new Sale($product3, 5);

$sales = array ($sale1, $sale2, $sale3);

$inventory = new Inventory($products);

// echo $sale2->getProduct()->getName();

$salerecord = new SaleRecord($client, "20/05/21", $sales);

echo $inventory->listProduct()."\n";

echo $salerecord->getSaleInfo();

$salerecord->updateQuantity();
// echo Sale::total($arreglo)."\n";
echo $inventory->listProduct()."\n";


;

