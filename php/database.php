<?php 
	//connection string for your database
	$connection = mysqli_connect("localhost","root","");
	//check if connection string is valid
	if(!$connection){
		die("Connection error" . mysqli_error());
	}
	//check if database exists
	if(!mysqli_select_db($connection,"sis_main")){
		die("Connection error " . mysqli_error());
	}
	//or you can easily do this
	//mysqli_connect() accepts 4 parameters - the last is for your database name
	/*$connection = mysqli_connect("localhost","root","","main_db");
	//check if connection string is valid
	if(!$connection){
		die("Connection error" . mysqli_error());
	}*/
?>