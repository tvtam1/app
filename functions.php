<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

require ('database/User.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// print_r($product->getData());
// $product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );
$User = new User($db );
