<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 


	$stud_id = $_POST['stud_id'];
	$stud_fname = $_POST['stud_fname'];
	$stud_lname = $_POST['stud_lname'];
	$stud_mname	 = $_POST['stud_mname'];
	$stud_stadd = $_POST['stud_stadd'];
	$stud_age = $_POST['stud_age'];
	$stud_dob = $_POST['stud_dob'];
	$stud_email_add = $_POST['stud_email_add'];
	$stud_mobno = $_POST['stud_mobno'];
	$stud_gender = $_POST['stud_gender'];
	$stud_ctadd = $_POST['stud_ctadd'];

	$sql = "INSERT INTO student VALUES ('$stud_id','$stud_fname','$stud_lname','$stud_mname','$stud_stadd','$stud_ctadd','$stud_age','$stud_dob','$stud_gender','$stud_email_add','$stud_mobno');";

	$result=mysqli_query($connection,$sql);

	header("Location: ../index.php");

	?>