  <main role="main"> 
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2" id="pageTtl"></h1>
           <div class="btn-toolbar mb-2 mb-md-0" id="content-bar">
           </div>
          </div>

         <div id="content">
         	

         </div>
          
        </main>

  <script>
    let d = Date();
    let dString = d.toString();
    document.getElementById('content-bar').innerHTML = dString.substr(0,15);

  </script>