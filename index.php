<?php include('server.php');
//if user is not logged in,they cannot access this page
	if(empty($_SESSION['username'])) {
		header('location:login.php');
	}
 ?>
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
		<h2>Home page</h2>
		</div>

		<div class="content">
		<?php if(isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			</br>
			<p><a href="index.php?logout='1'" id="log">sign in</a></p>
		<?php endif ?>
		</div>
</body>
</html>