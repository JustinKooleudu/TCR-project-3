<?php
// require('config.php');
if (!empty($_SESSION['id'])){
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM gebruiker WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else
{
    // header("Location: main.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="Bapp.js"></script>
</head>
<body>

<div id="dropdown1">
    <div class="Searchbar">
        <form id="searchBar" action="">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" placeholder="Search GameINK..." name="search">
        </form>
    </div>
    <a id="inc" href="#">Settings</a>
    <a id="inc" href="#">Profile</a>
    <a id="inc" href="#">Games</a>
    <a id="inc" href="#">Catalog</a>
    <a id="inc" href="#">Friends</a>
    <a id="inc" href="#">Store</a>
    <a id="inc" href="#">Cart</a>
    <a id="incc" href="#">Light Modes</a>
</div>
    <nav>
    <a id="pad" onclick="Dropdown()"><i id="dropdownParent">
            <L id="line"></L>
            <L id="line"></L>
            <L id="line"></L>
        </i></a>
        <a href="Aindex.php" id="logo"><img id="logo" src="docs/logo.png" src="../docs/logo.png"></a>
        <a id="pad" onclick="Dropdown2()"><i class='fas fa-user-circle' id="user"></i></a>
    </nav>

    <div id="dropdown2">
    <a href="USERsignup.php">
        <i id= "SigninDrop">
            <h1>Sing in</h1>
            <i id="drop" class='fas fa-sign-in-alt'></i>
        </i>
        </a>
        <a href="USERlogin.php">
        <i id="LoginDrop">
            <h1>Log in</h1>
            <i id="drop" class='fas fa-sign-in-alt'></i>
        </i>
        </a>
    </div>