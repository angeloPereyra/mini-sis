<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 


	$f_id = $_POST['f_id'];
	$stud_id = $_POST['stud_id'];
	$subj_code = $_POST['subj_code'];
	$mtgrade = $_POST['mtgrade'];
	$ftgrade = $_POST['ftgrade'];

	$sql = "INSERT INTO grades VALUES ('$stud_id','$subj_code','$f_id','$mtgrade','$ftgrade');";

	$result=mysqli_query($connection,$sql);

	header("Location: ../grade.php");

	?>