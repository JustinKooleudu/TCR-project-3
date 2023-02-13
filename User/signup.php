<?php
include_once('../head-footer/EXheader.php');
?>

<section class="oneSign">
    <div class="sign">
        <h1 id="main">Sign in at game<P id="i">INK</P></h1>
        <h1 id="second">Already have an account?&nbsp;<a id="Loginn" href="../User/login.php">LOG IN</a></h1>
    <form id="signin" action="../includes/signup.inc.php" method="post">
    <h1>sign in</h1>
    <input type="text" name="name" placeholder="Full name..." required="" maxlength="50">
    <input type="text" name="user" placeholder="Username..." required="" maxlength="12">
    <input type="text" name="email" placeholder="Email..." required="" maxlength="50">
    <input type="text" name="pwd" placeholder="Password..." required="" maxlength="200">
    <input type="text" name="pwdrepeat" placeholder="Repeat Password..." required="" maxlength="200">
    <button type="submit" name="submit">SIGN UP</button>
    </form>
    </div>
    <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields</p>";
    }
    elseif ($_GET["error"] == "invaliduid") {
        echo "<p>choose a better username</p>";
    }
    elseif ($_GET["error"] == "invalidemail") {
        echo "<p>choose a valid email</p>";
    }
    elseif ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>password doesn't match</p>";
    }
    elseif ($_GET["error"] == "stmtfailed") {
        echo "<p>something went wrong</p>";
    }
    elseif ($_GET["error"] == "usernametaken") {
        echo "<p>username already taken</p>";
    }
    elseif ($_GET["error"] == "none") {
        echo "<p>you have signd up</p>";
    }
}
?>
</section>

<?php
include_once '../head-footer/EXfooter.php';
?>