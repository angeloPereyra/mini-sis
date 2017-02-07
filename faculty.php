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

	<div class="mod-bg" id="new-stu-mod">
		<div class="form mod" id="reg-faculty">
			<form action="">
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
						<input type="date" name= "f_dob" id="f_dob" required>
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
		<div class="tbl-new-b-c">
			<button type="button" class="btn b-s new-b-s" id="new-stu-btn" onclick="document.getElementById('new-stu-mod').style.display = 'block' ">Register Faculty</button>
		</div>
		<h2>Faculties</h2>
		
		<table>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Mobile Number</th>
				<th>Street</th>
				<th>City</th>
			</tr>
			<tr>
				<td>01</td>
				<td>Neil Angelo</td>
				<td>Acuemo</td>
				<td>Pereyra</td>
				<td>18</td>
				<td>Male</td>
				<td>pereyra.neil18@gmail.com</td>
				<td>09482448106</td>
				<td>Quezon City?</td>
				<td>Ano 'to hahaha</td>
			</tr>
			<tr>
				<td>02</td>
				<td>Christian Athen</td>
				<td>Denila</td>
				<td>Villa</td>
				<td>12</td>
				<td>Male</td>
				<td>christianvilla@gmail.com</td>
				<td>0932184142</td>
				<td>Manila City?</td>
				<td>Ano ba</td>
			</tr>
		</table>
	</div>
</body>
</html>