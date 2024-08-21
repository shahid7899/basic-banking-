<?php

	#$conn = mysqli_connect('localhost','root','','BASIC-BANKING-WEBSITE-MAIN');
	$conn=mysqli_connect('localhost','root','','BASIC-BANKING-WEBSITE-MAIN');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>