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
	<br>
	<div class="header">
		<h2>Login</h2>
	</div>
		<form method="post" action="login.php">
		<!--displaying validation errors here -->
		<?php include('errors.php'); ?>
			<div class="input-group">
					<label>Username</label>
					<input type="text" name="username">
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<button type="submit" name="login" class="btn">Login</button>
				</div>

		</form>
		<h3>Not yet a member?</br></br><a href="register.php" id="member"> Sign up</a></h3>
		<br>
		<br><br>
</body>
</html>