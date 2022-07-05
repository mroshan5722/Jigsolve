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
$sql = " SELECT name FROM users ORDER BY ID DESC LIMIT 5";
$names = $mysqli->query($sql);

$sql = " SELECT name FROM users ORDER BY ID DESC LIMIT 1";
$name = $mysqli->query($sql);

$sql = " SELECT score FROM leaderboard ORDER BY ID DESC LIMIT 5";
$scores = $mysqli->query($sql);

$sql = " SELECT score FROM leaderboard ORDER BY ID DESC LIMIT 1";
$score = $mysqli->query($sql);

$mysqli->close();
?>


<!-- HTML code to display data in tabular format -->
<html>
    <head>
    <!-- <link rel="stylesheet" href="leaderboard.css"> -->
    <style>
        html,body{
            font-size: 20px;
            font-family: sans-serif;
            margin: 0%;
            padding: 0%;
        }
        p{
            text-align: center;
            position: relative;
            top: 30px;
            
        }
        .table{
            position: relative;
            left: 35%;
            top: 50px;

        }

        .name{
            display: inline-block;
            position: relative;
            left: 10px;
            border-top: 2px solid #ed802d;
            border-bottom: 2px solid #ed802d;
            border-left: 2px solid #ed802d;
            text-align:left;
            font-size: 20px;
            padding: 10px;
            width: 300px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;

        }
        .score{
            display: inline-block;
            position: relative;
            border-top: 2px solid #ed802d;
            border-bottom: 2px solid #ed802d;
            border-right: 2px solid #ed802d;
            text-align:left;
            font-size: 20px;
            padding: 10px;
            width: 100px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        
        button{
            border: 2px solid #2f528f;
            background-color: #4473c4;
            position: relative;
            /* left: 50px;
            top: 10px; */
            padding: 15px 20px;
            margin: 10px 0;
            width: 15%;
            border-radius: 40px;
            /* position: relative; */
            left: 42.5%;
            top: 12%;
        }
        a{
            font-family: sans-serif;
            font-size: 20px;
            text-decoration: none;
            color: white;
        }

        button:hover{
            background-color:#4c7fd9;
        }

        button:active {
            background-color:#2f528f;
            transform: translateY(2px);
        }

        .table:hover{
            top:48px
        }
    </style>
</head>
    <body>
        <p>Better luck next time!</p>
            <div class = "table">
            <table class = "name">
                <tr>
                    <th>Name</th>
                </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                while($rows=$names->fetch_assoc())
                {
            ?>
            <tr>
                <td>
                <?php echo $rows['name'];?></td>
                <?php
                    }
                ?>
            </tr>  
        </table>
        <table class = "score">
            <tr>
                <th>Score</th>
            </tr>
            <?php
                while($rows=$scores->fetch_assoc())
                {
            ?>
            <tr>
            <td>
                <?php echo $rows['score'];?></td>
                <?php
                    }
                ?>
            </tr>
        </table>
        </div>
        <button><a href="index.html">HOME</a></button>
        <script src="game.js"></script>
    </body>
</html>