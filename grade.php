<?PHP
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Grade | Online SIS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="ref/old-hw-style-main.css">
	<link rel="stylesheet" href="css/style-main.css">

</head>
<body>

	<?PHP include "header.php"; ?>
	<?PHP include "nav.php"; ?>

	<div class="mod-bg" id="new-stu-mod">
		<div class="form mod" id="reg-faculty">
			<form action="php/giveGrade.php" method="post">
				<div class="formheader">
					<h2>Grade Student</h2>
				</div>
				<div class="subform">
					<div class="align">
						<label for="f_id">Faculty: </label>
						<select name="f_id" id="f_id" style="width: 515px; height: 40px;">
							<?PHP
							include "database.php";
							$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

							$sql = "SELECT * FROM faculty";

							$result = mysqli_query($connection,$sql);

							while($row = mysqli_fetch_assoc($result)){

								$id = $row['f_id'];
								$name = "ID: {$id} | {$row['f_lname']}, {$row['f_fname']} {$row['f_mname']}";

								echo "<option value=\"{$id}\">{$name}</option>";
							}
							?>
						</select>
					</div>
					<div class="align">
						<label for="stud_id">Student: </label>
						<select name="stud_id" id="stud_id" style="width: 515px; height: 40px;">
							<?PHP
							include "database.php";
							$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

							$q_student = "SELECT * FROM student";

							$result = mysqli_query($connection,$q_student);

							while($row = mysqli_fetch_assoc($result)){

								$stud_id = $row['stud_id'];
								$stud_name = "ID: {$stud_id} | {$row['stud_lname']}, {$row['stud_fname']} {$row['stud_mname']}";

								echo "<option value=\"{$stud_id}\">{$stud_name}</option>";
							}
							?>
						</select>
					</div>
					<div class="align">
						<label for="subj_code">Subject: </label>
						<select name="subj_code" id="subj_code" style="width: 515px; height: 40px;">
							<?PHP
							include "database.php";
							$connection = mysqli_connect("localhost","root","","sis_main"); //your connection string 

							$sql = "SELECT * FROM subject";

							$result = mysqli_query($connection,$sql);

							while($row = mysqli_fetch_assoc($result)){

								$id = $row['subj_code'];
								$name = "ID: {$id} | {$row['subj_name']}";

								echo "<option value=\"{$id}\">{$name}</option>";
							}
							?>
						</select>
					</div>
					<div class="align">
						<label for="mtgrade">Midterm Grade: </label>
						<input type="text" name= "mtgrade" id="mtgrade" required placeholder="1.00">
					</div>
					<div class="align">
						<label for="ftgrade">Final Term Grade: </label>
						<input type="text" name= "ftgrade" id="ftgrade" required placeholder="1.00">
					</div>
				</div>
				<div class="buttons">
					<input type="submit" value="Register" class="btn b-s">
					<input type="button" value="Cancel" class="btn b-c" onclick="document.getElementById('new-stu-mod').style.display = 'none'"">
				</div>
			</form>
		</div>
	</div>

	<div class="tbl v" id="tbl-g">
		<div class="tbl-new-b-c">
			<button type="button" class="btn b-s new-b-s" id="new-stu-btn" onclick="document.getElementById('new-stu-mod').style.display = 'block' ">Grade Student</button>
		</div>
		<h2>Grades</h2>
		
		<table>
			<tr>
				<th>Student ID</th>
				<th>Student Name</th>
				<th>Faculty ID</th>
				<th>Faculty Name</th>
				<th>Subject Code</th>
				<th>Subject Name</th>
				<th>Midterm Grade</th>
				<th>Final Term Grade</th>
			</tr>

			 <?PHP include 'php/readGrade.php'; ?> 
		</table>
	</div>
</body>
</html>