
<?php
if($_SERVER["REQUEST_METHOD"]==="POST");
{
	$id = $_POST["id"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$mem_date = $_POST["mem_date"];

	$query = "INSERT INTO Members (id, name, email, password, address, phone, mem_date ) 
		VALUES ({$id},'{$name}','{$email}','{$password}','{$address}','{$phone}','{$mem_date}')";

	require_once 'db-connection.php';
	if(connect($query)) {
		echo "Value Inserted Successfully";
	} else {
		echo "Error in Inserting Value";
	}
}
?>