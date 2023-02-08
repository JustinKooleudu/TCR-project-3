<?php
    include_once('standards/header.php'); 
?>

<section class="oneSign">
    <div class="sign">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
</section>



<?php
    include_once('standards/footer.php'); 
?>