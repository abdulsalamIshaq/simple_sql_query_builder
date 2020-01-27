<?php
require_once("function.php");

$conn = new sql;

$connect = $conn->connect();

if($connect){
	echo "Connection was made successfully<br>";
		$conn->query("SELECT * FROM post where category = :catID");
		$conn->bind(array(':catID' => 3));
		$rows = $conn->fetchAll();
		if ($conn->numRows() ==1) {
			# code...
				foreach ($rows as $row) {
				# code...
				echo $row->postTitle."<br>";
			}
		}else{
			echo "eror fetching";
		}
		

	}



?>