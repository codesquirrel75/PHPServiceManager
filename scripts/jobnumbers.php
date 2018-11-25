<?php

function getJobNumbers()
{

	$query = "Select * From job_numbers Where status=0";

	$link = mysqli_connect('localhost', 'serviceManager', 'serviceManager','serviceManager');
if(!$link)
{
	die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($link, $query);

if($result)
{
	$jobnumbers =  '<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Job Number</th>
	      <th scope="col">Company</th>
	      <th scope="col">Location</th>
	    </tr>
	  </thead>
  	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		
			$jobnumbers = $jobnumbers . '<tr>
			      <td scope="row">' . $row[0] . '</td>
			      <td>' . $row[1] . '</td>
			      <td>' . $row[3] . '</td>
			    </tr>';
	}
	$jobnumbers = $jobnumbers . ' </tbody>
				</table>';
}
else
{
	$jobnumbers = '<div class="alert alert-danger" role="alert">
  			<center><h2> No Work Orders loaded. </h2></center>
		</div>';
}

mysqli_close($link);

return $jobnumbers;
}



?>