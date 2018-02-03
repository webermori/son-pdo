<?php
//Class conection
require_once "IConn.php";
require_once "Conn.php";

//Class product
require_once "IProduct.php";
require_once "Product.php";

require_once "ServiceProduct.php";

$db = new Conn("localhost", "son_pdo", "root", "");

$product = new Product;
$product->setName("HTML Course")->setDesc("Build a complete website!");

$service = new ServiceProduct($db, $product);

print_r($service->save());