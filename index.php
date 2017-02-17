<?PHP
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Authenticate | Online SIS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="ref/old-hw-style-main.css">
	<link rel="stylesheet" href="css/style-main.css">
</head>
<body>

	<?PHP include "header.php"; ?>

	<div class="mod-bg" id="new-aut-mod">
		<div class="form mod" id="do-reg">
			<form action="php/doAuthenticate.php" method="post">
				<div class="formheader">
					<h2>Authenticate</h2>
				</div>
				<div class="subform">
					<div class="align">
						<label for="u_id">ID: </label>
						<input type="text" name= "u_id" id="u_id" required>
					</div>
					<div class="align">
						<label for="u_pass">Password: </label>
						<input type="text" name= "u_pass" id="u_pass" required>
					</div>
					<div class="align">
						<label for="u_acc_type">User Type: </label>
						<select name="u_acc_type" id="u_acc_type">
							<option value="S">Student</option>
							<option value="F">Faculty</option>
							<option value="A">Administrator</option>
						</select>
					</div>
				</div>
				<div class="buttons">
					<input type="submit" value="Login" class="btn b-s">
					<input type="button" value="Cancel" class="btn b-c" onclick="document.getElementById('new-stu-mod').style.display = 'none'"">
				</div>
			</form>
		</div>
	</div>
</body>
</html>