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
$items->email = (isset($_POST['email']) ? $_POST['email'] : '');
$items->password = (isset($_POST['password']) ? $_POST['password'] : '');

session_start();
$result = $items->getUserInfo();

if ($result->num_rows > 0) {
    // $itemRecords=array();
    // $itemRecords["users"]=array(); 
    while ($item = $result->fetch_assoc()) {
        extract($item);
        $itemDetails = array(

            "email" => $email,
            "password" => $password
        );
        //array_push($itemRecords["users"], $itemDetails);
    }
}

//$data = json_decode(file_get_contents("php://input"));

if ($_POST['email'] == $itemDetails['email'] && $_POST['password'] == $itemDetails['password']) {
    $_SESSION['email'] = $itemDetails['email'];
    $_SESSION['id'] = $itemDetails['id']; 
    echo "success";
    var_dump($_SESSION['email']);
    var_dump($itemDetails);
    var_dump($_POST['email']);
} else {
    echo "fail";
    var_dump($itemDetails);
   header('Location: ../frontend/sites/loginPage.php');
    //   echo "<div class='form'>
    //   <h3>Incorrect Username/password.</h3><br/>
    //   <p class='link'>Click here to <a href='Login.php'>Login</a> again.</p>
    //   </div>";

}

exit();
