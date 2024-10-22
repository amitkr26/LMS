<?php
if($_SERVER["REQUEST_METHOD"]==="POST")
{
	$id = $_POST["id"];
	$name = $_POST["name"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	
	$query = "INSERT INTO Publisher (id, name, address, email) VALUES ({$id},'{$name}','{$address}','{$email}')";

	require_once 'db-connection.php';

	if(connect($query)){
		echo "Value Inserted Successfully";
	}
	 else 
	{ 
		echo "Error in Inserting Value";
	}
}
?>