<!DOCTYPE html>
<html>
<head>
	<title>Course | Online SIS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="ref/old-hw-style-main.css">
	<link rel="stylesheet" href="css/style-main.css">
</head>
<body>

	<?PHP include "header.php"; ?>

	<div class="mod-bg" id="new-stu-mod">
		<div class="form mod" id="reg-faculty">
			<form action="php/registerFaculty.php" method="post">
				<div class="formheader">
					<h2>Register Faculty</h2>
				</div>
				<div class="subform">
					<h3 class="subheader">Personal Information</h3>
					<div class="align">
						<label for="f_id">Faculty ID: </label>
						<input type="text" name= "f_id" id="f_id" required>
					</div>
					<div class="align">
						<label for="f_fname">First Name: </label>
						<input type="text" name= "f_fname" id="f_fname" required>
					</div>
					<div class="align">
						<label for="f_lname">Last Name: </label>
						<input type="text" name= "f_lname" id="f_lname" required>
					</div>
					<div class="align">
						<label for="f_mname">Middle Name: </label>
						<input type="text" name= "f_mname" id="f_mname">
					</div>
					<div class="align">
						<label for="f_age">Age: </label>
						<input type="number" name= "f_age" id="f_age" required>
					</div>
					<div class="align">
						<label for="f_dob">Birthday: </label>
						<input type="text" name= "f_dob" id="f_dob" required>
					</div>
					<div class="align">
						<label for="f_gender">Gender</label>
						<select name="f_gender" id="f_gender">
							<option value="M">Male</option>
							<option value="F">Female</option>
						</select>
					</div>
				</div>
				<div class="subform">
					<h3 class="subheader">Contact</h3>
					<div class="align">
						<label for="f_stadd">Street: </label>
						<input type="text" name= "f_stadd" id="f_stadd" required>
					</div>
					<div class="align">
						<label for="f_ctadd">City: </label>
						<input type="text" name= "f_ctadd" id="f_ctadd" required>
					</div>
					<div class="align">
						<label for="f_email">Email: </label>
						<input type="email" name= "f_email" id="f_email" required>
					</div>
					<div class="align">
						<label for="dept_id">Department Code: </label>
						<input type="text" name= "dept_id" id="dept_id" required>
					</div>
				</div>
				<div class="buttons">
					<input type="submit" value="Register" class="btn b-s">
					<input type="button" value="Cancel" class="btn b-c" onclick="document.getElementById('new-stu-mod').style.display = 'none'"">
				</div>
			</form>
		</div>
	</div>

	<div class="tbl v">
		<!-- <div class="tbl-new-b-c">
			<button type="button" class="btn b-s new-b-s" id="new-stu-btn" onclick="document.getElementById('new-stu-mod').style.display = 'block' ">Register Faculty</button>
		</div> -->
		<h2>Course</h2>
		
		<table>
			<tr>
				<th>Course Code</th>
				<th>Name</th>
				<th>Description</th>
				<th>Department Code</th>
			</tr>

			<?PHP include 'php/readCourse.php'; ?>
		</table>
	</div>
</body>
</html>