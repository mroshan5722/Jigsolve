<?php
		header("Location: leaderboard.php");
		$host = "localhost"; 
        $user = "root"; 
        $pass = ""; 
        $db = "puzzledb";

		$conn = mysqli_connect("localhost", "root", "", "puzzledb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Score = $_POST['number'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users (score) VALUES ('$Score')";
		
		if(mysqli_query($conn, $sql)){
			echo "SUCCESS";
		}
		
		// Close connection
		mysqli_close($conn);
		?>
