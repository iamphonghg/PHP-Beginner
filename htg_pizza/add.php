<?php
	include('config/db_connect.php');
	$error = array('email'=>'', 'title'=>'', 'ingredients'=>'');

	$email = $title = $ingredients = '';

	if (isset($_POST['submit'])) {
		// print_r($_POST);
		//check email
		if (empty($_POST['email'])) {
			$error['email'] = 'An email is required </br>';
		} else {
			$email = $_POST['email'];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error['email'] = 'Email must be a valid email address'; 
			}
		}
		//check title
		if (empty($_POST['title'])) {
			$error['title'] = 'A title is required </br>';
		} else {
			$title = $_POST['title'];
			if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
				$error['title'] = 'Title must be letters and spaces only';
			}
		}
		//check ingredients
		if (empty($_POST['ingredients'])) {
			$error['ingredients'] = 'At least one ingredient is required </br>';
		} else {
			$ingredients = $_POST['ingredients'];
			if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
				$error['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}

		if (array_filter($error)) {
			echo 'errors in the form';
		} else {

			$email = mysqli_real_escape_string($connect, $_POST['email']);
			$title = mysqli_real_escape_string($connect, $_POST['title']);
			$ingredients = mysqli_real_escape_string($connect, $_POST['ingredients']);

			$query = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

			//save to db and check

			if (mysqli_query($connect, $query)) {
				//success
				header('Location: index.php');
			} else {
				echo 'Query error: ' . mysqli_error($connect);
			}

			
		}

	}
?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php'); ?>
	
	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email:</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
			<div class="red-text"><?php echo $error['email']; ?></div>
			<label>Pizza Title:</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
			<div class="red-text"><?php echo $error['title']; ?></div>
			<label>Ingredients (comma separated):</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
			<div class="red-text"><?php echo $error['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php') ?>

</html>