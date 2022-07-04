<!-- PHP code to establish connection with the localserver -->
<?php
$host='localhost';
$user = 'root';
$pass = '';
$db = 'puzzledb';
$mysqli = new mysqli($host, $user, $pass, $db);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
// SQL query to select data from database
$sql = " SELECT name FROM users ORDER BY ID DESC ";
$result = $mysqli->query($sql);
// $mysqli->close();

$sql = " SELECT name FROM users ORDER BY ID DESC LIMIT 1";
$result1 = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<html>
    <head>
    <link rel="stylesheet" href="leaderboard.css">
</head>
    <body>
        <?php
        while($rows=$result1->fetch_assoc()){
            ?>
        <p>Congratulations 
            <?php
                echo $rows['name']
            ?>
        ! </p>
        <?php
            }
            ?>
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