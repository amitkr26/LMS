<?php 
	function connect($query) {
		$server = "localhost";
		$user  =  "root";
		$pass  =  "";
		$dbname = "ravi_lms";

		$conn = new MySQLi($server,$user,$pass,$dbname);
		if($conn->connect_error)
		{
			die("Error in Establshing the connection....".$conn->connect_error);
		}

		return $conn->query($query);
	}
 ?>