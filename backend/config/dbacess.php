<?php
class Database{
	
	// private $host  = 'localhost';
    // private $user  = 'dev';
    // private $password   = "dev";
    // private $database  = "webDB"; 
    


    
    public function getConnection(){		
		// $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		// if($conn->connect_error){
		// 	die("Error failed to connect to MySQL: " . $conn->connect_error);
		// } else {
		// 	return $conn;
		// }

        $con = mysqli_connect("localhost","root","root","webDB");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
		return $con;
	}
    }
}
?>

