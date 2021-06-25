<?php 
	// echo $_SERVER['SERVER_NAME'] . '</br>';
	// echo $_SERVER['REQUEST_METHOD'] . '</br>';
	// echo $_SERVER['SCRIPT_FILENAME'] . '</br>';
	// echo $_SERVER['PHP_SELF'] . '</br>';

	if (isset($_POST['submit'])) {
		
		// cookie for gender

		setcookie('gender', $_POST['gender'], time() + 86400);

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: index.php');	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<form action="sandbox.php" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>