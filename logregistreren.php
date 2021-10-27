<?php include('DB/connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Casi - Account</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/logregistreren.css">
</head>

<body>
	<div class="login-page">
		<div class="box">
			<div class="left">
				<h3>Maak een account</h3>
				<button type="button" class="register-btn">Registreren</button>
			</div>
			<div class="right">
				<h3>Heb je al een account?</h3>
				<button type="button" class="login-btn">Login</button>
			</div>
			<div class="form">
				<form action="DB/login_verwerken.php" method="post">
					<div class="login-form">
						<h3>Log In</h3>
						<div class="form-group">
							<input type="text" placeholder="Email*" class="form-control" name="user" id="user" required>
						</div>
						<div class="form-group">
							<input type="password" placeholder="Wachtwoord*" class="form-control" name="password" id="password" required>
						</div>
						<div class="form-group">
							<label>
								<input type="checkbox"> Onthoud mij
							</label>
						</div>
						<button type="submit" class="submit-btn" name="login_user">Login</button>
					</div>
				</form>
				<form action="DB/registreren_verwerken.php" method="post">
					<div class="register-form form-hidden">
						<h3>Registreren</h3>
						<div class="form-group">
                        <div class="form-group">
							<input type="text" placeholder="Email*" class="form-control" name="user" id="user" required>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Gebruikersnaam*" class="form-control" name="gebruikersnaam" id="gebruikersnaam" required>
						</div>
						<div class="form-group">
							<input type="password" placeholder="Wachtwoord*" class="form-control" name="password" id="password" required>
						</div>
						<div class="form-group">
							<input type="radio" id="genderMale" name="genderRdb" value="Man" required/><label for="genderMale">Man</label> 
							<input type="radio" id="genderFemale" name="genderRdb" value="Vrouw" required/><label for="genderFemale">Vrouw</label> 
						</div>
						<button type="submit" class="submit-btn" name="reg_user">Registreren</button>
					</div>
				</form>
				<div class="lost-password-form form-hidden">
					<h3>Lost Your Password?</h3>
					<h5>You will receive a link to create a new password via email.</h5>
					<div class="form-group">
						<input type="text" placeholder="Email Address*" class="form-control">
					</div>
					<button type="button" class="submit-btn">Reset password</button>
					<p><a href="#" class="login-btn">Login</a> | <a href="#" class="register-btn">Register</a></p>
				</div>
			</div>
		</div>
	</div>
	<script src="JS/logregistreren.js"></script>
</body>
</html>