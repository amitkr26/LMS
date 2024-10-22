<?php
if($_SERVER["REQUEST_METHOD"]==="POST");
{
	$id = $_POST["id"];
	$title = $_POST["title"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$quantity = $_POST["quantity"];
	$author_id = $_POST["author_id"];
	
	$query = "INSERT INTO Books (id, title, description, price, quantity, author_id) 
		VALUES ({$id}, '{$title}', '{$description}','{$price}', '{$quantity}', {$author_id})";

	require_once 'db-connection.php';
	
	if(connect($query)) {
		echo "Value Inserted Successfully";
	} else {
		echo "Error in Inserting Value";
	}

	require_once 'db-connection.php';
	
	$query="SELECT * FROM books";
	$result=connect($query);
	if($result->num_rows===0)
	{
		echo "no data found";
	}
	else { ?>
	<table>
		<tr>
			<th>id</th>
			<th>title</th>
			<th>description</th>
			<th>price</th>
			<th>quantity</th>
		</tr>

	<?php
	foreach($result as $row):?>
		<tr>
			<td><?=$row["id"]?></td>
			<td><?=$row["title"]?></td>
			<td><?=$row["description"]?></td>
			<td><?=$row["quantity"]?></td>
			<td><?=$row["price"]?></td>
		</tr>
	<?php endforeach ?>
	</table>
	<?php
	// $conn->close();

	}
}

 ?>