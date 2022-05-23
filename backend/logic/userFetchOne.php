
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/dbacess.php';
include_once '../models/user.php';

$database = new Database();
$db = $database->getConnection();
 
$items = new Users($db);


//$items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : ''; //this

$items->id = (isset($_POST['id']) ? $_POST['id'] : '');

$result = $items->fetch();

if($result->num_rows > 0){    
    $itemRecords=array();
    $itemRecords["users"]=array(); 
	while ($item = $result->fetch_assoc()) { 	
        extract($item); 
        $itemDetails=array(
            "id" => $id,
            "fname" => $fname,
            "lname" => $lname,
			"address" => $address,
            "notes" => $notes,            
			"country" => $country,
            "city" => $city,
			"zipcode" => $zipcode,
            "email" => $email,            
			"password" => $password,
            "pnumber" => $pnumber		
        ); 
       array_push($itemRecords["users"], $itemDetails);
    }    
    http_response_code(200);     
    echo json_encode($itemRecords);
}else{     
    http_response_code(404);     
    echo json_encode(
        array("message" => "No user found.")
    );
} 




//  <?php  
//  //fetch.php  
//  $connect = mysqli_connect("localhost","root","root","webDB");  
//  if(isset($_POST["employee_id"]))  
//  {  
//       $query = "SELECT * FROM users WHERE id = '".$_POST["employee_id"]."'";  
//       $result = mysqli_query($connect, $query);  
//       $row = mysqli_fetch_array($result);  
//       echo json_encode($row);  
//  }  
//  ?> 