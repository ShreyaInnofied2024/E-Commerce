<?php
include('product.php');
include('database.php');
$db=new Database();
$Phone = new Product('Apple',30,56);
$result=$Phone->update();
if (count($result) > 0) {
    //header("Location : form.php");
    //$query= "UPDATE product SET name = :name, quantity = :quantity, price = :price WHERE id = :id";
    //$params = [':id' => $id,':name' => $_POST['name'],':quantity' => $_POST['quantity'],':price' => $_POST['price']];
    //$db->executeQuery($query,$params);
    echo "Record Updated <br>";
} else {
    echo "No products found in the database.";
}
 