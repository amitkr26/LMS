<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Live Search using AJAX</title>
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sticky.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>  
<body>
<div class="row">
  <div class="col-lg-4 col-lg-offset-4">
    <div class="form-group">
      <label for="search">Search</label>
      <input type="text" id="search" placeholder="Search" class="form-control" />
    </div>
   <b>Ex: </b><i>David, Ricky, Ronaldo, Messi, Watson, Robot</i>
  </div>
</div>  
<div id="display"></div>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
   function fill(Value) {
   $('#search').val(Value);
   $('#display').hide();
}
$(document).ready(function() {
   $("#search").keyup(function() {
       var name = $('#search').val();
       if (name == "") {
           $("#display").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",
               data: {
                   search: name
               },
               success: function(html) {
                   $("#display").html(html).show();
               }
           });
       }
   });
});
</script>
</body>
</html>


