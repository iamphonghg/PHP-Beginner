<?php 
	include('config/db_connect.php');
	// write query
	$query = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
	// make query & get result
	$result = mysqli_query($connect, $query);

	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);
	mysqli_close($connect);

	// print_r($pizzas);
?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php'); ?>
	
	<h4 class="center grey-text">Pizza!</h4>

	<div class="container">
		<div class="row">
			<?php foreach ($pizzas as $pizza): ?>
				<div class="col s6 md3">
					<div class="card z-depth-0">
						<img src="img/pizza.svg" class="pizza">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<div>
								<?php $ingredient = explode(',', $pizza['ingredients']); ?>
								<ul>
									<?php foreach ($ingredient as $separate): ?>
										<li><?php echo htmlspecialchars(trim($separate)); ?></li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id']; ?>">More info</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>

			<?php if (count($pizzas) >= 3): ?>
				<p>There are 3 or more pizzas</p>
			<?php else: ?>
				<p>There are less than 3 pizzas</p>
			<?php endif; ?>

		</div>
	</div>

	<?php include('templates/footer.php') ?>

</html>