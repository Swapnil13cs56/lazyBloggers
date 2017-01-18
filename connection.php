<?php
$db_hostname = 'localhost';
$db_database = '#';

$db_username = 'root';

$db_password = '#';

// Connect to server. 
$db_server = mysqli_connect($db_hostname, $db_username, $db_password)
    or die("Unable to connect to MySQL: " . mysqli_error('1'));
	
// Select the database.
mysqli_select_db($db_server,$db_database)
    or die("Unable to select database: " . mysqli_error('1'));
?>