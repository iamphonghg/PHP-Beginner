<?php 
	
	include('config/db_connect.php');

	if (isset($_POST['delete'])) {
		$id_to_delete = mysqli_real_escape_string($connect, $_POST['id_to_delete']);

		$query = "DELETE FROM pizzas WHERE id = $id_to_delete";

		if (mysqli_query($connect, $query)) {
			header('Location: index.php');
		} else {
			echo 'Query error: ' . mysqli_error($connect);
		}
	}

	// check GET request id param
	if (isset($_GET['id'])) {
		$id = mysqli_real_escape_string($connect, $_GET['id']);

		$query = "SELECT * FROM pizzas WHERE id = $id";

		$result = mysqli_query($connect, $query);

		$pizza = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($connect);

		// print_r($pizza);
	}

	if (0 > 1) {
		echo 'echo';
	} {
		echo 'false';
	}

?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<div class="container center grey-text">
		<?php if ($pizza): ?>
			<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
			<p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
			<p><?php echo date($pizza['created_at']); ?></p>
			<h5>Ingredients:</h5>
			<p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

			<!-- DELETE FORM -->
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>
		<?php else:  ?>
			<h5>No such pizza exists!</h5>

		<?php endif; ?>
	</div>

	<?php include('templates/footer.php'); ?>


</html>