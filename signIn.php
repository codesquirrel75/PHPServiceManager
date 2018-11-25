<?php
session_start();
echo '<script type="text/javascript">var login = 0;</script>';
if(isset($_SESSION['login']))
{
  echo '<script type="text/javascript"> login = ' . $_SESSION['login'] . ';</script>';
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
	  <link rel="stylesheet" type="text/css" href="css/signin.css">

    <title>Service Manager</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Service Manager</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        
      </div>

    </nav>

 	  <form class="form-signin" method="post" action="scripts/SignIn.php">
	     <!-- <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
	      <h1 class="h3 mb-3 font-weight-normal color-primary-3">Please sign in</h1>
        <h5 class="danger" id="bad-user">You entered an incorrect user name.</h5>
        <h5 class="danger" id="bad-pass">You entered an incorrect password.</h5>
	      <label for="inputUserName" class="sr-only">User Name</label>
	      <input name="user" type="text" id="inputUserName" class="form-control" placeholder="User Name" required autofocus>
	      <label for="inputPassword" class="sr-only">Password</label>
	      <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	      <div class="checkbox mb-3">
	        
	      </div>
	      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      
    </form>

    <nav class="navbar navbar-expand-md navbar-dark fixed-bottom bg-dark bottom-nav">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSearch">
        
      </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
  if(login === 1)
  {
    document.getElementById('bad-user').style.display='block';
    document.getElementById('bad-pass').style.display='none';
  } 
  else if(login === 2)
  {
    document.getElementById('bad-pass').style.display='block';
    document.getElementById('bad-user').style.display='none';
  }
  else if(login === 0)
  {
    document.getElementById('bad-pass').style.display='none';
    document.getElementById('bad-user').style.display='none';
  } 

  </script>


  </body>
</html>
