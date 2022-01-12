<?php 
    $host = 'localhost';
	$DBUser = "root";
	$DBPassword = '';
	$db = 'library';
	
	$conn = mysqli_connect($host,$DBUser, $DBPassword, $db);
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
  	}
?>