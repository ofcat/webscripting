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
 
$product = new Products($db);
 
$data = json_decode(file_get_contents("php://input"));

if(!empty($data->id)) {
	$product->id = $data->id;
	if($product->delete()){    
		http_response_code(200); 
		echo json_encode(array("message" => "Product was deleted."));
	} else {    
		http_response_code(503);   
		echo json_encode(array("message" => "Unable to delete product."));
	}
} else {
	http_response_code(400);    
    echo json_encode(array("message" => "Unable to delete products. Data is incomplete."));
}
?>