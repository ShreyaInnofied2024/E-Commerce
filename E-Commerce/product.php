<?php

include('database.php');
class Product
{
    private $db;
    public function __construct(
        public $name,
        public $quantity,
        public $price
    ){
        $this->db = new Database();
    }

    public function add()
    {
        $query = "INSERT INTO product(name, quantity, price) VALUES (:name, :quantity, :price)";
        $params = [':name' => $this->name,':quantity' => $this->quantity,':price' => $this->price];
        $this->db->executeQuery($query,$params);
        echo "New Record Added <br>";
    }

    public function list(){
        $query = "SELECT id, name, quantity, price FROM product";
        $stmt=$this->db->executeQuery($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function view(){
        $query = "SELECT name, quantity, price FROM product where id=$_GET[id]";
        $stmt=$this->db->executeQuery($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update()
    {
        $query = "SELECT name, quantity, price FROM product where id=$_GET[id]";
        $stmt=$this->db->executeQuery($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function delete()
    {
        $query = "DELETE FROM product where id=$_GET[id]";
        $stmt=$this->db->executeQuery($query);
        echo "Sucessfully deleted";
    }
    
    public function __destruct()
    {
        echo "End of Program";
    }
}