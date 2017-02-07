<?php 
	include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

	$id = $_POST['u_id'];
	$pass = $_POST['u_pass'];
	$acc_type = $_POST['u_acc_type'];
	$verified = false;

	// $sql = "INSERT INTO faculty VALUES ('$f_id','$f_fname','$f_lname','$f_mname','$dept_id','$f_age','$f_dob','$f_gender','$f_email','$f_stadd','$f_ctadd');";


	// header("Location: ../faculty.php");

	$sql = "SELECT * FROM ";

	if($acc_type == "S")
		$sql = $sql."student WHERE stud_id = ".wrapParam($id)." AND  pass = ".wrapParam($pass).";";
	else if($acc_type == "F")
		$sql = $sql."faculty WHERE f_id = ".wrapParam($id)." AND  pass = ".wrapParam($pass).";";
	else 
		$sql = $sql."admin id = ".wrapParam($id)." AND  pass = ".wrapParam($pass).";";

	// echo "".$sql;

	$result=mysqli_query($connection,$sql);

	while($row = mysqli_fetch_assoc($result))
	{	
		if($acc_type == "S")
			$db_id = $row['stud_id'];
		else if($acc_type == "F")
			$db_id = $row['f_id'];
		else 
			$db_id = $row['id'];

		$db_pass = $row['pass'];

		if($id == $db_id && $pass == $db_pass)
		{
			$verified = true;
			break;
		}
	}

	if($verified)
	{
		header("Location: ../grade.php");
	}

	echo "Account not found";

	function wrapParam($p)
	{
		$p = "'".$p."'";
		return $p;
	}
	?>