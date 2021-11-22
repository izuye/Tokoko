<?php
	// Database credentials
	define('DB_SERVER', ''); //host
	define('DB_USERNAME', ''); //username
	define('DB_PASSWORD', '');  //pawsot
	define('DB_NAME', ''); //db name

	// Attempt to connect to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	//
	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}