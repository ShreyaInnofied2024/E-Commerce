<?php
include('category.php');
$product = new Category('Apple',30);
$product->delete($_GET['id']);