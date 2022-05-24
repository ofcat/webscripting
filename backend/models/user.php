<?php
class Users{   
    
    private $usersTable = "users";      
    public $id;
    public $fname;
    public $lname;
    public $address;
    public $notes;
    public $country; 
	public $city; 
    public $zipcode; 
    public $email; 
    public $password; 
    public $pnumber; 
    private $conn;
	
    public function __construct($db){
        $this->conn = $db;
    }	
	
	function read(){	
		if($this->id) {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->usersTable." WHERE id = ?");
			$stmt->bind_param("i", $this->id);					
		} else {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->usersTable);		
		}		
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	
	function create(){
		
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->usersTable."(`fname`, `lname`, `address`, `notes`, `country`, `city`, `zipcode`, `email`, `password`, `pnumber`)
			VALUES(?,?,?,?,?,?,?,?,?,?)");
		
		$this->fname = htmlspecialchars(strip_tags($this->fname));
		$this->lname = htmlspecialchars(strip_tags($this->lname));
		$this->address = htmlspecialchars(strip_tags($this->address));
		$this->notes = htmlspecialchars(strip_tags($this->notes));
		$this->country = htmlspecialchars(strip_tags($this->country));
        $this->city = htmlspecialchars(strip_tags($this->city));
		$this->zipcode = htmlspecialchars(strip_tags($this->zipcode));
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->password = htmlspecialchars(strip_tags($this->password));
		$this->pnumber = htmlspecialchars(strip_tags($this->pnumber));
		
		
		$stmt->bind_param("ssssssissi", $this->fname, $this->lname, $this->address, $this->notes, $this->country, 
        $this->city, $this->zipcode, $this->email, $this->password, $this->pnumber);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
		
	function update(){
	 
		$stmt = $this->conn->prepare("
			UPDATE ".$this->usersTable." 
			SET fname= ?, lname = ?, address = ?, notes = ?, country = ?, city = ?, zipcode = ?, email = ?, password = ?, pnumber = ?
			WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));
            $this->fname = htmlspecialchars(strip_tags($this->fname));
            $this->lname = htmlspecialchars(strip_tags($this->lname));
            $this->address = htmlspecialchars(strip_tags($this->address));
            $this->notes = htmlspecialchars(strip_tags($this->notes));
            $this->country = htmlspecialchars(strip_tags($this->country));
            $this->city = htmlspecialchars(strip_tags($this->city));
            $this->zipcode = htmlspecialchars(strip_tags($this->zipcode));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = htmlspecialchars(strip_tags($this->password));
            $this->pnumber = htmlspecialchars(strip_tags($this->pnumber));
	 
            $stmt->bind_param("ssssssissii", $this->fname, $this->lname, $this->address, $this->notes, 
            $this->country, $this->city, $this->zipcode, $this->email, $this->password, $this->pnumber, $this->id);

		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	
	function delete(){
		
		$stmt = $this->conn->prepare("
			DELETE FROM ".$this->usersTable." 
			WHERE id = ?");
			
		$this->id = htmlspecialchars(strip_tags($this->id));
	 
		$stmt->bind_param("i", $this->id);
	 
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}

	function fetch(){

			$stmt = $this->conn->prepare("SELECT * FROM ".$this->usersTable." WHERE id = ?");
			$stmt->bind_param("i", $this->id);					
			
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
}
?>