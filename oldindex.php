<?php
session_start();
if(isset($_SESSION['UI']))
{
  $content = "<h1> It's Set!</h1>";
}
else
{
  $content = "<h1> Sorry Not signed in.</h1>";
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <title>Service Manager</title>
  </head>
  <body>

  	 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Service Manager</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Job Numbers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Work Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ManPower</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Enter Work Order</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#">Sign In <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>

    </nav>

<?php

echo $content;


?>

<!--   Bottom Nav Bar --->

<nav class="navbar navbar-expand-md navbar-dark fixed-bottom bg-dark">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSearch">
        
        <div class="container">
          <div class="row">
            <div class="col-md-3"></div> 
            <div class="col-md-6">
              <form class="form-inline mt-2 mt-md-0">
                  <select class="form-control" style="margin: 5px;">
                    <option>Search Type</option>
                    <option>Customer</option>
                    <option>Vendor</option>
                    <option>Employee</option>
                    <option>Service Tech.</option>
                  </select>
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  


  </body>
</html>