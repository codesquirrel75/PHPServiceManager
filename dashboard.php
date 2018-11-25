<?php
session_start();

include('scripts/schedule.php');
include('scripts/workorders.php');


$schedule = getSchedule($_SESSION['UI']);
$workorders = getWorkOrders(1,1,$_SESSION['UI']);

/*
$query = "Select * From manpower WHERE employee_ID =" . $_SESSION['UI'];
	
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
*/
?>
<div class="container-fluid">
<div class="row">

<?PHP
echo '<div class="col">
	<div class="card" style="width: 37rem;">
		  <div class="card-header">
		    Schedule
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">';
		    

//Schedule here
echo $schedule;
	
echo '		    </blockquote>
		  </div>
		</div>';

echo '</div>';


echo '<div class="col">
	<div class="card" style="width: 37rem;">

		  <div class="card-header">
		    Work Orders
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">';

echo $workorders;

echo '		</blockquote> 
		 </div>
		<div>
		</div>';




?>

</div>	
</div>