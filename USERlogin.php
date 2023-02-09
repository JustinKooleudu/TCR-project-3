<?php
require('config.php');
include_once('Zheader.php');
if (!empty($_SESSION['id'])) {
    header("Location; USERlogin.php");
}
if(isset($_POST['login'])) {
    $useremail = $_POST['useremail'];
    $password = $_POST['pwd'];
    $result = mysqli_query($conn, "SELECT * from gebruiker WHERE Username = '$useremail' OR Email = '$useremail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0) {
        if($password == $row['Password']){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
        }
        else{
            echo
            "<script> alert('Wachtwoord Incorrect') </script>";
        }
    }
    else {
        echo
        "<script> alert('gebruikersnaam of email bestaat niet') </script>";
    }
}
?>

<section class="oneSign">
    <div class="sign">
    <h1 id="main">Sign in at game<P id="i">INK</P></h1>
        <h1 id="second">Don't have an account?&nbsp;<a href="USERsignup.php">Sign Up</a></h1>
        <form id="signin" action="" method="post" autocomplete="off">
            <input type="text" name="useremail" placeholder="Username or email..." required="" maxlength="50"><br>
            <input type="password" name="pwd" placeholder="Password..." required="" maxlength="200"><br>
            <button type="submit" name="login" value="login">Log in</button>
        </form>
    </div>
</section>

<?php
    include_once('Zfooter.php'); 
?>
