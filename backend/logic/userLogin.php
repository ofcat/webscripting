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
 
$items = new Users($db);

//$items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';
//$items->id = (isset($_POST['id']) ? $_POST['id'] : '');

$result = $items->read();

$data = json_decode(file_get_contents("php://input"));

// $error = array();
// $res = array();

if (!empty($data)) {
    if ($data[9] === $result[1]){
        
    }
}



if (count($error) > 0) {
    $resp['msg'] = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
}

// $statement = $db->prepare("select * from users where email = :email");
// $statement->execute(array(':email' => $_POST['email']));
// $row = $statement->fetchAll(PDO::FETCH_ASSOC);
if (count($row) > 0) {
    if (!password_verify($_POST['password'], $row[0]['password'])) {
        $error[] = "Password is not valid";
        $resp['msg'] = $error;
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }
    session_start();
    $_SESSION['id'] = $row[0]['id'];
    $resp['redirect'] = "products.html";
    $resp['status'] = true;
    echo json_encode($resp);
    exit;
} else {
    $error[] = "Email does not match";
    $resp['msg'] = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
}