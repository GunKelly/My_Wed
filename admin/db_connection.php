<?php
	include("cofig.php");
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
	if(!$conn){
		die("Cannot connect to my data.".mysqli_error($conn));
	}

?>