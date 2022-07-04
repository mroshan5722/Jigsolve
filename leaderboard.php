<!-- PHP code to establish connection with the localserver -->
<?php
$host='localhost';
$user = 'root';
$pass = '';
$db = 'puzzledb';

$mysqli = new mysqli($host, $user,
                $pass, $db);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT name FROM users ORDER BY ID DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- CSS FOR STYLING THE PAGE -->
	<!-- <style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style> -->
    <link rel="stylesheet" href="leaderboard.css">
</head>

<body>
    <p>Congratulations Player Name! </p>
    <p>Your Score is <span id = "finalScore">XXX</span></p>
    <div class = "table">
        <table>
            <tr>
                <th>Name</th>
                <th>Score</th>
            </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
        <?php
            // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
        ?>
        <tr>
            <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
            <td><?php echo $rows['name'];?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <br>
        <button><a href="index.html">HOME</a></button>
    </div>
    <script src="game.js"></script>
</body>

</html>
