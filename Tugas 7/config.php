<?php

	$server 	= "localhost";
	$username	= "root";
	$pass 		= "";
	$dbname 	= "pwb_modul5";
	
	$conn 		= mysqli_connect($server, $username, $pass, $dbname);

	if (!$conn)
		die("Connection Failed : " . mysqli_connect_error());
	
?>