<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>HIMALAYA COLLEGE EXIBITION</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
</head>
<body>
	<h1>HIMALAYA COLLEGE EXIBITION</h1>
	<div class="header">
		<h2>Register</h2>
	</div>
		<form method="post" action="register.php">
		<!--displaying validation errors here -->
		<?php include('errors.php'); ?>
			<div class="input-group">
					<label>Username</label>
					<input type="text" name="username">
				</div>
				<div class="input-group">
					<label>Batch</label>
					<input type="text" name="batch">
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Re-password</label>
					<input type="password" name="password_2">
				</div>
				<div class="input-group">
					<button type="submit" name="register" class="btn">Register</button>
				</div>

		</form>
		<h3>Already a member?</br></br><a href="login.php" id="member"> Sign in</a></h3>
		<br>
		<br>
</body>
</html>