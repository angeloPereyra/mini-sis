<!DOCTYPE html>
<html>
<head>
	<title>Student | Online SIS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="ref/old-hw-style-main.css">
	<link rel="stylesheet" href="css/style-main.css">
</head>
<body>

	<?PHP include "header.php"; ?>

	<div class="form" id="reg-student">
		<form action="">
			<div class="formheader">
				<h2>Register Student</h2>
			</div>
			<div class="subform">
				<h3 class="subheader">Personal Information</h3>
				<div class="align">
					<label for="stud_id">Student ID: </label>
					<input type="text" name= "stud_id" id="stud_id" required>
				</div>
				<div class="align">
					<label for="stud_fname">First Name: </label>
					<input type="text" name= "stud_fname" id="stud_fname" required>
				</div>
				<div class="align">
					<label for="stud_lname">Last Name: </label>
					<input type="text" name= "stud_lname" id="stud_lname" required>
				</div>
				<div class="align">
					<label for="stud_mname">Middle Name: </label>
					<input type="text" name= "stud_mname" id="stud_mname">
				</div>
				<div class="align">
					<label for="stud_age">Age: </label>
					<input type="number" name= "stud_age" id="stud_age" required>
				</div>
				<div class="align">
					<label for="stud_dob">Birthday: </label>
					<input type="date" name= "stud_dob" id="stud_dob" required>
				</div>
				<div class="align">
					<label for="stud_gender">Gender</label>
					<select name="stud_gender" id="stud_gender">
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
				</div>
			</div>
			<div class="subform">
				<h3 class="subheader">Contact</h3>
				<div class="align">
					<label for="stud_stadd">ST Address: </label>
					<input type="text" name= "stud_stadd" id="stud_stadd" required>
				</div>
				<div class="align">
					<label for="stud_ctadd">CT Address: </label>
					<input type="text" name= "stud_ctadd" id="stud_ctadd" required>
				</div>
				<div class="align">
					<label for="stud_email_add">Email: </label>
					<input type="email" name= "stud_email_add" id="stud_email_add" required>
				</div>
				<div class="align">
					<label for="stud_mobno">Mobile Number: </label>
					<input type="number" name= "stud_mobno" id="stud_mobno" required>
				</div>
			</div>
			<div class="buttons">
				<input type="submit" value="Submit" class="btn b-s">
				<input type="button" value="Cancel" class="btn b-c">
			</div>
		</form>
	</div>
</body>
</html>