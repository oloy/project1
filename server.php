<?php
	session_start();

	$username = "";
	$email = "";
	$errors = array();
	/*if( ! empty( $_POST )) {
		print_r($_POST);}*/
	//connect to the database
	$db = mysqli_connect('localhost:3306', 'root', '', 'registration');
	/*if($db->connect_error){
		echo'sorry';
	}*/
	//if register button is clicked
	//link with the register
	if(isset($_POST['register'])){
			$username = $_POST['username'];
			$batch = $_POST['batch'];
			$password_1 = $_POST['password_1'];
			$password_2 = $_POST['password_2'];
			//ensure that the form are filled properly
			if(empty($username)){
				array_push($errors,"Username is required!!!");
			}
			if(empty($batch)){
				array_push($errors,"Batch is required!!!");
			}
			if(empty($password_1)){
				array_push($errors,"Password is required!!!");
			}
			if($password_1 != $password_2)
			{
				array_push($errors,"password do not match!!!");
			}
			//if no error save user to database
			if (count($errors)==0)
			{
				$password = md5($password_1);//encrypt password before storing in database(security)
				//$sql = "INSERT INTO users (username,batch,password) VALUES ('$username', '$batch', '$password')";
				mysqli_query($db,"INSERT INTO users (username, batch, password_1, password_2) VALUES ('$username', '$batch', '$password','$password')");
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "you are now registered ^_^";
				header('location: index.php'); //redirect to home page

			}
	}
	//log user in from login page
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password_1'];

		//ensure that the forms are filled properly
		if(empty($username)) {
			array_push($errors, "Username is required");
		}
		if(empty($password))
		{
			array_push($errors, "Password is required");
		}
		if(count($errors) == 0) {
	 		$password = md5($password);//encrypting password
	 		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	 		$result = mysqli_query($db, $query);
	 	if(mysqli_num_rows($result) == 1) {
	 		//log user in
	 			$_SESSION['username'] = $username;
				$_SESSION['success'] = "you are now logged in ^_^";
				header('location: index.php');//redirecting to home page
 
		 }
		 else{
		 		array_push($errors,"wrong username or password");
		 }
		}
	}


	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location:login.php');
	}

?>