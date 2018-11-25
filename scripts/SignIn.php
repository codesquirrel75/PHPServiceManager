<?php
session_start();

$user = $_POST['user'];
$pass = sha1($_POST['pass']);

$query = "SELECT * FROM users WHERE user_name = '" . $user . "'";

$link = mysqli_connect('localhost', 'serviceManager', 'serviceManager','serviceManager');
if(!$link)
{
	die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($link, $query);
if($result)
{
	$_SESSION['login'] = 1;
}

	while ($row = mysqli_fetch_array($result))
	{
		if($pass === $row['password'])
		{
			$_SESSION['UI'] = $row['id'];
			if(isset($_SESSION['login']))
			{
				$_SESSION['login'] = 0;
			}
		}
		else
		{
			$_SESSION['login'] = 2;
			echo "Wrong password or user name.";
			if(isset($_SESSION['UI']))
			{
				unset($_SESSION['UI']);
			}
		}

		
	}


mysqli_close($link);
header('location: ../dashboard');





?>