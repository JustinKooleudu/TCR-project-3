<?php
session_start();
$_SESSION['fileType'] = 1;
include_once("includes/dbh.inc.php");
include_once("includes/functions.inc.php");
include_once("head-footer/header.php");

?>

<html>
    <header></header>
    <body>
        <br><br><div class="us">
        <h1>About us</h1>
        <p1>we are a startup located in silicon valley, we hope to give game to poeple and be a platform </p1><br>
        <p1>where creators big and small can post their games for poeple to enjoy and have a great time and a great comunity.</p1>
        <br><br><br></div>
        <div class="team">
        <h2>Our team</h2>
        <p2>The team is filled with kind people such as, john our team leader he makes sure that everything is going </p2><br>
        <p2>as planned and helps people with problems. there is also burt he makes sure finaces are done correctly </p2><br>
        <p2>there are a lot of people we could go thru like: amanda, sara, james, lilith, peter, chatGPT, kelith, </p2><br>
        <p2>zanathar, felix, erik, sam, arthur, ect</p2></div>
            <br><br><br><br><br><br><br><br>
    </body>
</html>
<style>
    .us {
        margin-left: 25px;
    }
    .team {
        margin-left: 25px;
    }
</style>
<?php

include_once("head-footer/footer.php");

?>