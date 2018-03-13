<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'gocarshare';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	if (!$conn)     
		die('Could not connect: ' . mysqli_error($conn));
	if (!mysqli_select_db($conn, $dbname))    
		die("Can't select database");	
?>