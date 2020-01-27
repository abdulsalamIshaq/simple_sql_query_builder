<?php
//namespace App\DB;
include 'config.php';
class sql{

	//fetching
	protected $conn;
	protected $stmt;
	//prepare stmt
	protected $tableName;
	protected $bindings;
	protected $query;

	public function connect(){
			
		try{
			$this->conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.'', USERNAME, PASSWORD);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $this->conn;
		}catch(Exception $e){
		    echo '<p class="error">'.$e->getMessage().'</p>';
			//return false;
		}
	}

	public function query($query){
		$this->query = $query;

		$this->stmt = $this->conn->prepare($query);
	}

	public function bind($bindings){
		$this->bindings = $bindings;

		return $this->stmt->execute($bindings);
	
	}

	public function fetchAll(){
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function all($tableName){
		$this->tableName = $tableName;
		return $this->conn->query('SELECT * FROM '.$this->tableName.'');
	}
	public function numRows(){
		return $this->stmt->rowCount();
	}
}

?>