<?php
include_once('../head-footer/EXheader.php');
include_once('../includes/dbh.inc.php');
include_once('../includes/functions.inc.php');
if(isset($_SESSION['userid'])) {
    CheckIfBanned($conn, $uid, 2);
}
?>

<section class="oneSign">
    <div class="sign">
    <h1 id="main">Log in at game<P id="i">INK</P></h1>
        <h1 id="second">Don't have an account?&nbsp;<a id="Loginn" href="../User/signup.php">Sign Up</a></h1>
        <form id="signin" action="../includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username or email..." required="" maxlength="50"><br>
            <input type="password" name="pwd" placeholder="Password..." required="" maxlength="200"><br>
            <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields</p>";
    }
    elseif ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login</p>";
    }
}
?>
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>
</section>

<?php
include_once('../head-footer/EXfooter.php');
?>