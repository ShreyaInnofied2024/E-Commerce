<?php
include('product.php');
$product = new Product('Apple',30,56);
$product->delete($_GET['id']);