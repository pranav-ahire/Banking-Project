<?php

	$servername = "localhost";
	$username = "id17543855_bankproject";
	$password = "Pr@nav3062001";
	$dbname = "id17543855_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>