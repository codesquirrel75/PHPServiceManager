<?php 
	session_start();
	include('header.php');
 ?>
	<script type="text/javascript"> 
		var page = '';
		var pages = ['dashboard', 'jobNumbers', 'workOrders', 'manPower'];
	</script>




<?php 
	include('footer.php');
?>

<script type="text/javascript">

 	for(var i = 0; i < pages.length; i++)
 	{
 		document.getElementById(pages[i]).classList.remove('active');
 	}
 	document.getElementById(page).classList.add('active');
 	
 </script>