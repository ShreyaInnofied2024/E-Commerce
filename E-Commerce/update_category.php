<?php
include('category.php');
$product = new Category($_POST['name'], $_POST['quantity']);
$product->update();

 