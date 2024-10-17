<?php
include('product.php');
$product = new Product($_POST['name'], $_POST['quantity'], $_POST['price']);
$product->update();

 