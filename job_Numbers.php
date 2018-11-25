<?php 
session_start();

include('scripts/jobnumbers.php');

$jobnums = getJobNumbers();
	
echo $jobnums;






?>