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

<form method="POST" action="add-publisher-contro.php">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h2> Add Here New Publisher</h2>
          </div>
    <div class="panel-body">

    <p>
      <div class="form-group">
  
    <label for="id"></label>
    <input type="number" name="id" id="id" class="form-control"  placeholder="Id:">
  </p>
   <p>
    <label for="name"></label>
    <input type="text" name="name" id="name" class="form-control"  placeholder="Name:"> 
  </p>

   <p>
    <label for="address"></label>
    <textarea type="text" name="address" id="address" class="form-control"  placeholder="Address:"></textarea>
  </p>
  
  <p>
    <label for="email"></label>
    <input type="email" name="email" id="email" class="form-control"  placeholder="Email:">
    
  </p>

  <p>
    <input type="submit" name="registration" id="registration" value="registration" class="btn btn-primary btn-block">
     <input type="submit" name="reset" id="reset" value="reset"class="btn btn-danger btn-block">
  </p>
 </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 <br></br>   
<footer class="foter">

  <p>&copy; 2016 Company, Inc.</p>
</footer>
</div>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.7/dist/js/jquery.min.js"></script>
  
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>