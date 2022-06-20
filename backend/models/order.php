<?php

class Order{

    private $ordersTable = "orders"; 
    public $id;
    public $date;
    public $userId; 
    private $conn; 
    private $orderContainsProducts = "order_contains_product";
    private $productsTable ="products";
    private $userTable = "users"; 
    //private $loggedInUser = $_SESSION['id'];
    
   


    public function __construct($db) {
        $this->conn = $db; 
    }

    /*function readUserOrder() {

         
        $stmt = $this->conn->prepare("Select orders.id, products.name, products.price, order_contains_product.Amount, 
        orders.Zeitpunkt, orders.UserId
         from order_contains_product left join products on order_contains_product.ProductId = products.id left 
         join orders on orders.Id = order_contains_product.OrderId AND orders.UserId =".$loggedInUser);

        $stmt -> execute(); 
        $result = $stmt->get_result(); 
        return $result; 
    }

    */
    
    
    

    function read() {
        $stmt = $this->conn->prepare("Select orders.Id, products.name, products.price, order_contains_product.Amount,
        orders.Zeitpunkt, orders.UserId from order_contains_product left join products on 
        order_contains_product.ProductId = products.id left join orders on orders.Id = 
        order_contains_product.OrderId ORDER BY orders.Id");
        
        $stmt -> execute(); 
        $result = $stmt->get_result(); 
        return $result; 
    }

    function readShort() {
        $stmt = $this->conn->prepare("Select orders.Id,
        orders.Zeitpunkt, orders.UserId from order_contains_product left join products on 
        order_contains_product.ProductId = products.id left join orders on orders.Id = 
        order_contains_product.OrderId ORDER BY orders.Id");

        $stmt -> execute(); 
        $result = $stmt->get_result(); 
        return $result; 
    }
    
}