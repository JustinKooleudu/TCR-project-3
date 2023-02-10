<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gameINK</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="app.js"></script>
</head>

<body>
    <header>
        <ul>
            <li class="right"><a href="settings.php"><i class="fa fa-gear"></i></a></li>
            <li class="right"><a href="user.php"><i class="fa fa-user"></i></a></li>
            <li class="right"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="friends.php">friends</a></li>
            <li><a href="library.php">library</a></li>
            <li><a href="store.php">store</a></li>
            <ul>
    </header>

    <div class="bovenbalk"></div>

    <br><br>

    <p>light mode: </p>

    <div id="checkbox-container">
        <label class="switch">
            <input type="checkbox" id="switch" onclick="light_switch()">
            <span class="slider round"></span>
        </label>
    </div>

</body>
</html>

<?php
$_SESSION["switch"];
echo $_SESSION
?>