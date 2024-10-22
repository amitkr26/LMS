<?php
if($_SERVER["REQUEST_METHOD"]==="POST")
{
	$id = $_POST["id"];
	$name = $_POST["name"];
	$description = $_POST["description"];
	
	$query = "INSERT INTO Authors (id, name, description) VALUES ({$id},'{$name}','{$description}')";

	require_once 'db-connection.php';
	if(connect($query)) {
		echo "Value Inserted Successfully";
	} else {
		echo "Error in Inserting Value";
	}
	
}

 ?>