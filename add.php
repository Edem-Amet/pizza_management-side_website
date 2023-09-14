<?php 

    include('templates/config/db_connect.php');

	$title = $size = $ingredients = '';
	$errors = array('title' => '', 'size' => '', 'ingredients' => '');
	if(isset($_POST['submit'])){
		
		// check title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required';
		} else{
			$title = $_POST['title'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
			$errors['title'] = 'title must be letters only';
		   }
		}

		// check size
		if(empty($_POST['size'])){
			$errors['size'] = 'A size is required';
		} else{
			$size = $_POST['size'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $size)){
				$errors['size'] = 'size must be letters only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {

			// escape sql chars
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$size = mysqli_real_escape_string($conn, $_POST['size']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

			// create sql
			$sql = "INSERT INTO pizzas(title,size,ingredients) VALUES('$title','$size','$ingredients')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<link rel="stylesheet" href="styless.css">
	<link rel="stylesheet" href="styles.css">

	<section class="container">
		<h3 class="center">Add a Pizza</h3>
		<form class="formm" action="add.php" method="POST">
			<label>Your title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="error-msg"><?php echo $errors['title']; ?></div>
			<label>Pizza size</label>
			<input type="text" name="size" value="<?php echo htmlspecialchars($size) ?>">
			<div class="error-msg"><?php echo $errors['size']; ?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
			<div class="error-msg"><?php echo $errors['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>