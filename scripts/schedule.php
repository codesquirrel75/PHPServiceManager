<?php

function getSchedule($id=0)
{
	if($id > 0)
	{
		$query = "Select * From manpower WHERE employee_ID =" . $_SESSION['UI'];
	}
	else
	{
		$query = "Select * From manpower";
	}

$link = mysqli_connect('localhost', 'serviceManager', 'serviceManager','serviceManager');
if(!$link)
{
	die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($link, $query);

if($result)
{
	$schedule =  '<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Job Number</th>
	      <th scope="col">Job Name</th>
	      <th scope="col">Date</th>
	    </tr>
	  </thead>
  	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		
			$schedule = $schedule . '<tr>
			      <th scope="row">' . $row[2] . '</th>
			      <td>' . $row[3] . '</td>
			      <td>' . $row[4] . '</td>
			    </tr>';
	}
	$schedule = $schedule . ' </tbody>
				</table>';
}
else
{
	$schedule = '<div class="alert alert-danger" role="alert">
  			<center><h2> No Manpower loaded. </h2></center>
		</div>';
}

mysqli_close($link);

return $schedule;

}



?>