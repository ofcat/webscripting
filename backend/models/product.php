<?php
class Products{   
    
    private $productsTable = "products";      
    public $id;
    public $name;
    public $description;
    public $price;
    public $img_path; 
	public $rating; 
    private $conn;
	
    public function __construct($db){
        $this->conn = $db;
    }	
	
	function read(){	
		if($this->id) {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->productsTable." WHERE id = ?");
			$stmt->bind_param("i", $this->id);					
		} else {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->productsTable);		
		}		
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	
	function create(){
		
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->productsTable."(`name`, `description`, `price`, `img_path`, `rating`)
			VALUES(?,?,?,?,?)");
		
		$this->name = htmlspecialchars(strip_tags($this->name));
		$this->description = htmlspecialchars(strip_tags($this->description));
		$this->price = htmlspecialchars(strip_tags($this->price));
		$this->img_path = htmlspecialchars(strip_tags($this->img_path));
		$this->rating = htmlspecialchars(strip_tags($this->rating));
		
		
		$stmt->bind_param("ssiis", $this->name, $this->description, $this->price, $this->img_path, $this->rating);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
		
	function update(){
	 
		$stmt = $this->conn->prepare("
			UPDATE ".$this->productsTable." 
			SET name= ?, description = ?, price = ?, img_path = ?, rating = ?
			WHERE id = ?");
	 
		$this->id = htmlspecialchars(strip_tags($this->id));
		$this->name = htmlspecialchars(strip_tags($this->name));
		$this->description = htmlspecialchars(strip_tags($this->description));
		$this->price = htmlspecialchars(strip_tags($this->price));
		$this->category_id = htmlspecialchars(strip_tags($this->img_path));
		$this->created = htmlspecialchars(strip_tags($this->rating));
	 
		$stmt->bind_param("ssiisi", $this->name, $this->description, $this->price, $this->img_path, $this->rating, $this->id);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	
	function delete(){
		
		$stmt = $this->conn->prepare("
			DELETE FROM ".$this->productsTable." 
			WHERE id = ?");
			
		$this->id = htmlspecialchars(strip_tags($this->id));
	 
		$stmt->bind_param("i", $this->id);
	 
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
}
?>