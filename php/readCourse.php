<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

	$sql = "SELECT * FROM course";

	$result = mysqli_query($connection, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>" . $row['course_id'] . "</td>";
			echo "<td>" . $row['course_name'] . "</td>";
			echo "<td>" . $row['course_desc'] . "</td>";
			echo "<td>" . $row['dept_id'] . "</td>";
		echo "</tr>";
	}
	
	?>