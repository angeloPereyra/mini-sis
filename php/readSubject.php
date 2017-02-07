<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

	$sql = "SELECT * FROM subject";

	$result = mysqli_query($connection, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>" . $row['subj_code'] . "</td>";
			echo "<td>" . $row['subj_name'] . "</td>";
			echo "<td>" . $row['subj_desc'] . "</td>";
			echo "<td>" . $row['course_id'] . "</td>";
			echo "<td>" . $row['semester'] . "</td>";
			echo "<td>" . $row['schlyr'] . "</td>";
		echo "</tr>";
	}
	
	?>