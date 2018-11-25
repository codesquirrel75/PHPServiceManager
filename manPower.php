<?php 

$query = "Select * From manpower";
	
$link = mysqli_connect('localhost', 'serviceManager', 'serviceManager','serviceManager');
if(!$link)
{
	die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($link, $query);

if($result)
{
	echo '<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Employee</th>
	      <th scope="col">Job Number</th>
	      <th scope="col">Job Name</th>
	      <th scope="col">Date</th>
	    </tr>
	  </thead>
  	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		echo   '<tr>
			      <th scope="row">' . $row[1] . '</th>
			      <td>' . $row[2] . '</td>
			      <td>' . $row[3] . '</td>
			      <td>' . $row[4] . '</td>
			    </tr>';
		}
	echo	' </tbody>
				</table>';
}
else
{
	echo '<div class="alert alert-danger" role="alert">
  			<center><h2> No Manpower loaded. </h2></center>
		</div>';
}
	
mysqli_close($link);
?>


    
   
 