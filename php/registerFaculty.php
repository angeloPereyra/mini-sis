<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

	$f_id = $_POST['f_id'];
	$f_fname = $_POST['f_fname'];
	$f_lname = $_POST['f_lname'];
	$f_mname = $_POST['f_mname'];
	$f_age = $_POST['f_age'];
	$f_dob = $_POST['f_dob'];
	$f_gender = $_POST['f_gender'];
	$f_stadd = $_POST['f_stadd'];
	$f_ctadd = $_POST['f_ctadd'];
	$f_email = $_POST['f_email'];
	$dept_id = $_POST['dept_id'];

	$sql = "INSERT INTO faculty VALUES ('$f_id','$f_fname','$f_lname','$f_mname','$dept_id','$f_age','$f_dob','$f_gender','$f_email','$f_stadd','$f_ctadd','pass');";

	// $result=mysqli_query($connection,$sql);

	// header("Location: ../faculty.php");

	if(mysqli_query($connection,$sql))
		header("Location: ../faculty.php");
	else
		echo mysqli_error();

	?>