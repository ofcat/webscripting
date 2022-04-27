<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once '../config/dbacess.php';
include_once '../models/product.php';
 
$database = new Database();
$db = $database->getConnection();
 
$products = new Products($db);
 
$data = json_decode(file_get_contents("php://input"));

if(!empty($data->name) && !empty($data->description) &&
!empty($data->price) && !empty($data->img_path) &&
!empty($data->rating)){    

    $products->name = $data->name;
    $products->description = $data->description;
    $products->price = $data->price;
    $products->img_path = $data->img_path;	
    $products->rating = $data->rating;	
    
    if($products->create()){         
        http_response_code(201);         
        echo json_encode(array("message" => "Item was created."));
    } else{         
        http_response_code(503);        
        echo json_encode(array("message" => "Unable to create item."));
    }
}else{    
    http_response_code(400);    
    echo json_encode(array("message" => "Unable to create item. Data is incomplete."));
}
?>