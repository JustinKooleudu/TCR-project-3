<?php
include_once('includes/functions.inc.php');
include_once('includes/dbh.inc.php');

session_start();

if(isset($_SESSION['userid'])) {
    $username = $_SESSION["user"];
    $email = $_SESSION["email"];
    $uid = $_SESSION["userid"];
    $name = $_SESSION['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/x-icon" href="docs/logoWeb.png">
</head>
<body>
    <div class="error">
    <h1>
        <?php
        if(isset($_GET['type'])){
            if ($_GET["type"] == "banned") {
                echo "<p>You have been banned for eternity</p>";
                echo "<p>and you have no rights to get an unban</p>";
            }

            if ($_GET["type"] == "bannedFromKlacht") {
                echo "You have been banned for telling lies";
                echo "<p>your ban is for eternity</p>";
            }
        }
        ?>
        </h1>
    </div>
</body>
</html>