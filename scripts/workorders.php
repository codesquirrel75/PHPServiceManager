<?php

function getWorkOrders($sorted=0,$status=0, $user=0)
{
	// Work Order Status assignments
	// 0 = Green Open
	// 1 = Amber Assigned
	// 2 = grey On Hold For Parts
	// 3 = Red Over Due
	// 4 = Blue Closed (Finished and Billed) **Only management can close a work order**
	$colorCode = ['success', 'warning', 'secondary', 'danger', 'info'];
	if($sorted)
	{
		$query = "Select * From work_orders WHERE status=" . $status;
		if($user > 0)
		{
			$query = $query . " AND assigned_to =" . $user;
		}
	}
	else
	{
		$query = "Select * From work_orders";
	}

$link = mysqli_connect('localhost', 'serviceManager', 'serviceManager','serviceManager');
if(!$link)
{
	die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($link, $query);

if($result)
{
	$workorders =  '<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Work Order Number</th>
	      <th scope="col">Company</th>
	      <th scope="col">Description</th>
	    </tr>
	  </thead>
  	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		
			$workorders = $workorders . '<tr>
			      <td scope="row"><span class="alert-' . $colorCode[$row[3]] . '" >' . $row[0] . '</span></td>
			      <td>' . $row[1] . '</td>
			      <td>' . $row[2] . '</td>
			    </tr>';
	}
	$workorders = $workorders . ' </tbody>
				</table>';
}
else
{
	$workorders = '<div class="alert alert-danger" role="alert">
  			<center><h2> No Work Orders loaded. </h2></center>
		</div>';
}

mysqli_close($link);

return $workorders;

}

?>