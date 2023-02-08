<?php
    include_once('standards/header.php'); 
?>

<section class="oneSign">
    <div class="sign">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat " placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>

<?php
    include_once('standards/footer.php'); 
?>