<?php
require_once("library/ep6client.phar");

// Connect to a shop
$shop = new ep6\Shop("my.shop.domain", "ShopName", "AUTHTOKEN", true);

// create a product flter
$productFilter = new ep6\ProductFilter();

// search for biycle and set german localization
$productFilter->setQueryString("bicycle");
$productFilter->setLocale("de_DE");

// start filtering and get the products
$products = $productFilter->getProducts();
?>