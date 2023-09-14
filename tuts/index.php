<?php

    include('templates/config/db_connect.php');

	// write query for all pizzas
	$sql = 'SELECT title, size, ingredients, id FROM pizzas ORDER BY available_from';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<link rel="stylesheet" href="styless.css">
	

	<h3 class="center">Pizzas!</h3>

	<div class="container">
		<div class="row">

			
		<?php foreach($pizzas as $pizza): ?>

				<div class=" col s6 md3 ">
				<img src="img/ontop1.png"class="pizza">
					<div class="display card z-depth-0">
						<div class="display card-content center">
							<h2><?php echo htmlspecialchars($pizza['title']); ?></h2>
							<h4><?php echo htmlspecialchars($pizza['size']); ?></h4>
							<h6> Ingredients </h6>
							<ul>
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
						</div>
					</div>
				</div>

				<?php endforeach; ?>

		</div>
	</div>


	<?php include('templates/footer.php'); ?>

</html>