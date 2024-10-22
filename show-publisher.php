<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Library Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="mystyle.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">LMS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books 
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-book-form.php">Add books</a></li>
            <li><a href="show-books.php">Show books</a></li>            
          </ul>
          </li>

            <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publisher
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-publisher.php">Add Publisher</a></li>
            <li><a href="show-publisher.php">Show Publisher</a></li>            
          </ul>
          </li>

            </li>

            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Members
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mem-ship-reg.php">Add Member</a></li>
            <li><a href="show-member.php">Show Member</a></li>            
          </ul>
          </li>

            </li>

             <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Authors
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-authors.php">Add Author</a></li>
            <li><a href="show-authors.php">Show Author</a></li>            
          </ul>
          </li>

            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<br/>
<br/>

<div class="container">
    <h1>Library Management System</h1>
    
<h2>Publisher List</h2>
<hr>
<?php
$conn = new MySQLi("localhost", "root", "", "ravi_lms");
if($conn->connect_error) {
	die("Could not connect to Database");
}

$query="SELECT * FROM publisher";
	$result=$conn->query($query);
	if($result->num_rows === 0)
	{
		echo "no data found";
	}
	else { ?>
	
	<table class="tblauthor">
		<thead>
		<tr>
			<th>Id</th>
			<th>name</th>
			<th>address</th>
			<th>email</th>
		</tr>
		</thead>
		<tbody>
	<?php
	foreach($result as $row): ?>
		<tbody>
      <tr>
			<td><?=$row["id"]?></td>
			<td><?=$row["name"]?></td>
			<td><?=$row["address"]?></td>
			<td><?=$row["email"]?></td>
		</tr>
    </tbody>
	<?php endforeach ?>
	</tbody>
	</table>
	<?php
	$conn->close();
}
?>
</div>
 <br></br>   
<footer class="foter">

  <p>&copy; 2016 Company, Inc.</p>
</footer>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.7/dist/js/jquery.min.js"></script>
  
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>
