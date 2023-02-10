<?php
require('../config/config.php');
include_once('../Head/2header.php');
if (!empty($_SESSION['id'])) {
    header("Location; index.php");
}
?>

<h1 id="mededeling">
    A.U.B.S.V.P<br>
    NIET duizenden accounts aanmaken <br>
    ik ben nog ff bezig met de user system <br>
    als je je hier registreert word je namelijk wel<br>
    in de database gezet.
</h1>

<section class="oneSign">
    <div class="sign">
        <h1 id="main">Sign in at game<P id="i">INK</P></h1>
        <h1 id="second">Already have an account?&nbsp;<a href="USERlogin.php">LOG IN</a></h1>
        <form id="signin" action="" method="post" autocomplete="off">
            <input type="text" name="name" placeholder="Full name..." required="" maxlength="50"><br>
            <input type="text" name="user" placeholder="Username..." required="" maxlength="50"><br>
            <input type="text" name="email" placeholder="Email..." required="" maxlength="50"><br>
            <input type="password" name="pwd" placeholder="Password..." required="" maxlength="200"><br>
            <input type="password" name="pwdRp" placeholder="Repeat Password..." required="" maxlength="200"><br>
            <button type="submit" name="register" value="register">SIGN UP</button>
        </form>
    </div>
</section>

<?php
if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordRP = $_POST['pwdRp'];
    $dupe = mysqli_query($conn, "SELECT * FROM gebruiker WHERE Username = '$user' OR Email = '$email'");

    if(mysqli_num_rows($dupe) > 0) {
        echo
            "<script> alert('gebruikersnaam of email bestaat al') </script>";
    } else {
        if ($password == $passwordRP) {
            $query = "INSERT INTO gebruiker VALUES('', '$name', '$user', '$email', '$password')";
            mysqli_query($conn, $query);
            echo
                "<script> alert('Account aangemaakt') </script>";
        } else {
            echo
            "<script> alert('Wachtwword komt niet overeen') </script>";
        }
    }
}

include_once('../Head/Footer2.php'); 
?>