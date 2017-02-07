<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

	$sql = "SELECT * FROM student";

	$result = mysqli_query($connection, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>" . $row['stud_id'] . "</td>";
			echo "<td>" . $row['stud_fname'] . "</td>";
			echo "<td>" . $row['stud_mname'] . "</td>";
			echo "<td>" . $row['stud_lname'] . "</td>";
			echo "<td>" . $row['stud_dob'] . "</td>";
			echo "<td>" . $row['stud_age'] . "</td>";
			echo "<td>" . $row['stud_gender'] . "</td>";
			echo "<td>" . $row['stud_email_add'] . "</td>";
			echo "<td>" . $row['stud_mobno'] . "</td>";
			echo "<td>" . $row['stud_stadd'] . "</td>";
			echo "<td>" . $row['stud_ctadd'] . "</td>";
		echo "</tr>";
	}
	
	?>