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
<style type="text/css">
  h2{
  background-color: white;
}
</style>
    
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
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books 
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-book-form.php">Add books</a></li>
            <li><a href="show-books.php">Show books</a></li>            
          </ul>
          </li>

            <li class="dropdown">
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
    </div><!-- /.container -->
    
    <br></br>
    <div class="container">
      <h1>LIBRARY MANAGEMENT SYSTEM</h1>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/banner.jpg" alt="First slide" id="image">
          <div class="container">
            <div class="carousel-caption">
              <h2>Whole World Here</h2>
              <p class="colr">If You Like reading come on site</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/banner1.jpg" alt="Second slide" id="image">
          <div class="container">
            <div class="carousel-caption">
              <h2>Library For All Type Books</h2>
              <p class="colr">Library For All Type Books.</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/banner2.jpg" alt="Third slide" id="image">
          <div class="container">
            <div class="carousel-caption">
              <h2>Here Find All Historical Books.</h2>
              <p class="colr">Here Find All Historical Books.</p>
             
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    

    <div class="row">
      <div class="col-lg-4">
        <h3>Library books</h3>
        <p>
        The library is freed from charge, and homes up to sixteen 100000 books, across languages, together with English, Hindi, and Indo-Aryan.
        As for genres, expect competitive examination books, books bearing on law, philosophy, religion, life science, engineering, literature, and fiction.
        If you are doing wish to borrow, you’ll ought to sign on to be a member at government agency twenty, once that you’ll be issued a recipient card.
        Price:Access is freed from charge,membership at government agency twenty.
      </p>
      <a href="">see more</a>
      </div>

      <div class="col-lg-4">
        <h3>Bookshelves </h3>
        <p>
          A library could be a place wherever several books square measure unbroken.
          Most libraries square measure public and let individuals take the books to use in their home.
          Most libraries let individuals borrow books for many weeks.
          Some belong to establishments, as an example, companies, churches, schools, and universities.
          Also a personality's bookshelves reception will have several books and be a library.
          The people who work in libraries are librarians.
          
           </p>
           <a href="">see more</a>
      </div>
      <div class="col-lg-4">
        <h3>Magazines</h3>
        <p> Other libraries keep famous or rare books.
            There square measure some "Copyright libraries" that have a duplicate of each book that has been written there in country.
            Some libraries even have alternative things that individuals would possibly like, like magazines, music on CDs, or computers wherever folks will use the net.
            In school they offer software to learn the alphabet and other details.</p>
            <a href="">see more</a>
      </div>

    </div>  
    <div class="row">
    <div class="col-lg-4">
      <img src="images/library5.jpg" alt="library5">
    </div>
      <div class="col-lg-4">
      <img src="images/Bookshelves.jpg"alt="Bookshelves" class="mage">
    </div>
   <div class="col-lg-4">
      <img src="images/books1 (5).jpg"alt="books1 (5)" class="mage">
       <img src="images/books1 (3).jpg"alt="books1 (3)" class="mage">
    </div>
     
    </div>
    </div>
    
    
 <br></br>   
<footer class="foter">

  <p>&copy; 2016 Company, Inc.</p>
</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.7/dist/js/jquery-3.7.1.js"></script>
  
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>
