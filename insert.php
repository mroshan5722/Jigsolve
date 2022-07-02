		<?php

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
		$Name = $_POST['name'];
        $Email = $_POST['email'];
        $Mobile = $_POST['mobile'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('id','$Name',
			'$Email','$Mobile')";
		
		if(mysqli_query($conn, $sql)){
			echo "<html><body>";
			echo "<html><body>";
		}
		
		// Close connection
		mysqli_close($conn);
		?>
