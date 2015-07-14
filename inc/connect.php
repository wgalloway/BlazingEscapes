<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	
	$databaseName = "blazing";

	$dbConnected = @mysql_connect($hostname, $username, $password);
	$dbSelected = @mysql_select_db($databaseName,$dbConnected);

	$dbSuccess = true;
	if ($dbConnected) {
		if (!$dbSelected) {
			echo "DataBase connection FAILED<br /><br />";
			$dbSuccess = false;
		}		
	} else {
		echo "MySQL connection FAILED<br /><br />";
		$dbSuccess = false;
	}
?>