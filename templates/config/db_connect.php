
<?php 

// connect to the database
	$conn = mysqli_connect('localhost', 'edem', 'edem1805', 'deezys_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>