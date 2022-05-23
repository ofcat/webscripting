<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once '../config/dbacess.php';
include_once '../models/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$users = new Users($db);
//$users->id = (isset($_POST['id']) ? $_POST['id'] : '');
 
$data = json_decode(file_get_contents("php://input"));

if(!empty($data->id)&& !empty($data->fname) && !empty($data->lname) &&
!empty($data->address) && !empty($data->notes) &&
!empty($data->country) && !empty($data->city) && 
!empty($data->zipcode)&& !empty($data->email) && 
!empty($data->password)&& !empty($data->pnumber)) {    

    $users->id = $data->id;
    $users->fname = $data->fname;
    $users->lname = $data->lname;
    $users->address = $data->address;
    $users->notes = $data->notes;	
    $users->country = $data->country;	
    $users->city = $data->city;	
    $users->zipcode = $data->zipcode;
    $users->email = $data->email;	
    $users->password = $data->password;
    $users->pnumber = $data->pnumber;
	
	
	if($users->update()){     
		http_response_code(200);   
		echo json_encode(array("message" => "Item was updated."));
	}else{    
		http_response_code(503);     
		echo json_encode(array("message" => "Unable to update items."));
	}
	
} else {
	http_response_code(400);    
    echo json_encode(array("message" => "Unable to update items. Data is incomplete."));
}
?>