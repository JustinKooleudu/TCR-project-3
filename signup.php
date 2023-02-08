<?php
    // include_once('standards/.php'); 
?>

<section class="oneSign">
    <div class="sign">
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdRepeat " placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>

<?php
    // include_once('standards/footer.php'); 
?>