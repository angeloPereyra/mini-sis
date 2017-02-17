<?php 
include "database.php";

	$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

	$sql = "SELECT grades.stud_id,stud_fname,stud_lname,stud_mname, grades.f_id,f_fname,f_lname,f_mname, grades.subj_code,subj_name, mtgrade, ftgrade FROM grades INNER JOIN student ON (grades.stud_id = student.stud_id) INNER JOIN subject ON (grades.subj_code = subject.subj_code) INNER JOIN faculty ON (grades.f_id = faculty.f_id)";


	$result = mysqli_query($connection, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		$stud_id = $row['stud_id'];
		$stud_fname = $row['stud_fname'];
		$stud_lname = $row['stud_lname'];
		$stud_mname	 = $row['stud_mname'];
		$s_name = "{$stud_lname}, {$stud_fname} {$stud_mname}";

		$f_id = $row['f_id'];
		$f_fname = $row['f_fname'];
		$f_lname = $row['f_lname'];
		$f_mname = $row['f_mname'];
		$f_name = "{$f_lname}, {$f_fname} {$f_mname}";

		$subj_code = $row['subj_code'];
		$subj_name = $row['subj_name'];

		$mtgrade = $row['mtgrade'];
		$ftgrade = $row['ftgrade'];


		echo "<tr>";
		echo "<td>" . $stud_id . "</td>";
		echo "<td>" . $s_name . "</td>";
		echo "<td>" . $f_id . "</td>";
		echo "<td>" . $f_name . "</td>";
		echo "<td>" . $subj_code . "</td>";
		echo "<td>" . $subj_name . "</td>";
		echo "<td>" . $mtgrade . "</td>";
		echo "<td>" . $ftgrade . "</td>";
		echo "</tr>";

	}

// SELECT
//   grades.stud_id,
//   stud_fname,
//   stud_lname,
//   stud_mname,
//   grades.f_id,
//   f_fname,
//   f_lname,
//   f_mname,
//   grades.subj_code,
//   subj_name
// FROM
//   grades
// INNER JOIN
//   student ON(
//     grades.stud_id = student.stud_id
//   )
// INNER JOIN SUBJECT ON
//   (
//     grades.subj_code = SUBJECT.subj_code
//   )
// INNER JOIN
//   faculty ON(grades.f_id = faculty.f_id);
	
	?>