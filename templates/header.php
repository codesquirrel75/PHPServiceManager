<?php


  if(!isset($_SESSION['UI']))
  {
    header('location:signIn');
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

    <script type="text/javascript"> 
    let page = 'dashboard';
    
    const pages = ['dashboard', 'job_Numbers', 'work_Orders', 'manPower'];
    const getContent = (clickedPage) =>{
       var xhr= new XMLHttpRequest();
        xhr.open('GET', clickedPage + '.php', true);
        xhr.onreadystatechange= function() {
    //if (this.readyState!==4) return;
    if (this.status!==200) return; // or whatever error handling you want
    document.getElementById('content').innerHTML= this.responseText;
};
xhr.send();

    }
    getContent(page);

    const getPage = (clicked) =>{
      page = clicked;
     
      getContent(page);
     



      document.getElementById('pageTtl').innerHTML = page.toUpperCase();

    for(var i = 0; i < pages.length; i++)
    {
      document.getElementById(pages[i]).classList.remove('active');
    }

      document.getElementById(page).classList.add('active');
    
    }


  </script>
    
  </head>

  <body>

  	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Service Manager</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active" id="dashboard">
            <a class="nav-link" href="#" onclick="getPage('dashboard')">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item" id="job_Numbers">
            <a class="nav-link" onclick="getPage('job_Numbers')" href="#">Job Numbers</a>
          </li>
          <li class="nav-item" id="work_Orders">
            <a class="nav-link" onclick="getPage('work_Orders')" href="#">Work Orders</a>
          </li>
          <li class="nav-item" id="manPower">
            <a class="nav-link" onclick="getPage('manPower')" href="#">Manpower</a>
          </li>
        </ul>

        <ul class="navbar-nav mr-auto justify-content-end">

          <li class="nav-item">
            <a class="nav-link" alt="Sign Out" href="signOut"><span data-feather="log-out"></span><span class="sr-only">(current)</span></a>
          </li>
        </ul>

      </div>

    </nav>