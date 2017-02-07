<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

	$sql = "SELECT * FROM faculty";

	$result = mysqli_query($connection, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>" . $row['f_id'] . "</td>";
			echo "<td>" . $row['f_fname'] . "</td>";
			echo "<td>" . $row['f_mname'] . "</td>";
			echo "<td>" . $row['f_lname'] . "</td>";
			echo "<td>" . $row['f_dob'] . "</td>";
			echo "<td>" . $row['f_age'] . "</td>";
			echo "<td>" . $row['f_gender'] . "</td>";
			echo "<td>" . $row['f_email'] . "</td>";
			echo "<td>" . $row['f_stadd'] . "</td>";
			echo "<td>" . $row['f_ctadd'] . "</td>";
			echo "<td>" . $row['dept_id'] . "</td>";
		echo "</tr>";
	}
	
	?>