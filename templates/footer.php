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

    <script src="js/feather.min.js"></script>
    <script>
      feather.replace()

      document.getElementById('pageTtl').innerHTML = page.toUpperCase();
     

    
    </script>
  


  </body>
</html>