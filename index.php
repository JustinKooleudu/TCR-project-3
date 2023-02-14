<?php
include_once('head-footer/header.php');
include_once('includes/functions.inc.php');
include_once('includes/dbh.inc.php');
?>
    <?php
    // print_r($_SESSION['winkelwagen']);
    if(isset($_POST['add'])){
        // print_r($_POST['productId']);
        if(isset($_SESSION['cart'])){
            $itemAryId = array_column($_SESSION['cart'], "productId",);

            if(in_array($_POST['productId'], $itemAryId)){
                echo '<script>alert("product is already in cart")</script>';
                echo '<script>window.location = index.php</script>';
            }
            else
            {
                $count = count($_SESSION['cart']);
                $itemAry = array('productId'=>$_POST['productId']);
                $_SESSION['cart'][$count] = $itemAry;
            }
        }
        else
        {
            $itemAry = array('productId'=>$_POST['productId']);
            $_SESSION['cart'][0] = $itemAry;
        }
    }
    ?>
<section id="oneIndex">
            <img id="currentDisplay" src="docs/Test1.png">
        <div class="Side">
            <?php 
            if (isset($_SESSION['userid'])) {
                echo '
                <h1 id="welcome">welcome '.$username.'</h1>
                <div id="inform">
                <h1>you may want to play..</h1>
                <div id="RecGames"></div>
                ';
            }
            else
            {
                echo '
                <h1 id="welcome">welcome</h1>
                <div id="inform">
                <h1>you may want to play..</h1>
                <div id="RecGames"></div>
                ';
            }
            ?>
        </div>
    </section>
    <div id="HeightCorrection"><div class="line"></div></div>

    <!-- GAMES SECTION ----------------------------------------------------------------------------------------------------------------------->

    <form action="" method="post"></form>
    <section id="spotlight">
        <nav id="Spotlight"><h1 id="spotlightTxt"><?php echo date('F') ?> Spotlight games</h1></nav>
        <div class="spotlight1">
            <?php
            $result = getData($conn, "SELECT * FROM games WHERE State = 'TRENDING';");
            $MaxCards = 0;
            while ($MaxCards < 5) {
                if($row = mysqli_fetch_assoc($result)){
                    GameDisplay1($row['naam'],$row['prijs'],$row['image'],$row['Id']);
                    $MaxCards++;
                }
            }
            ?>
        </div>
        <div class="spotlight2">
        <?php
            $result = getData($conn, "SELECT * FROM games WHERE State = 'TRENDING2';");
            $MaxCards = 0;
            while ($MaxCards < 3) {
                if($row = mysqli_fetch_assoc($result)){
                    GameDisplay2($row['naam'],$row['info'],$row['prijs'],$row['image'],$row['Id']);
                    $MaxCards++;
                }
            }
            ?>
        </div>
        <nav id="Spotlight2"><h1 id="spotlightTxt">Populaire games</h1></nav>
        <div class="spotlight2">
        <?php
            $result = getData($conn, "SELECT * FROM games WHERE State = 'POPULAR';");
            $MaxCards = 0;
            while ($MaxCards < 5) {
                if($row = mysqli_fetch_assoc($result)){
                    GameDisplay1($row['naam'],$row['prijs'],$row['image'],$row['Id']);
                    $MaxCards++;
                }
            }
            ?>
        </div>
        <div class="Spotlight3"><nav id="Spotlight22"><h1 id="spotlightTxt2">Free games</h1></nav><div class="spot4">
            <div class="spotlight4"><img id="gameImage3" src="docs/test2.png"><h1 id="gameName1">Game Name</h1><h1 id="gamePrice1">Game Price</h1></div>
            <div class="spotlight4"><img id="gameImage3" src="docs/test2.png"><h1 id="gameName1">Game Name</h1><h1 id="gamePrice1">Game Price</h1></div></div></div>

        <div class="Spotlight5"><img id="gameImage5" src="docs/GameIdCatalog.png">
        <div class="exploreC"><h1 id="exploreCtitle">Explore our catalog</h1><h1 id="exploreCinfo">catalog info</h1><button id="exploreCbutton">BROWSE ALL</button></div></div>
    </section>

    <?php
include_once('head-footer/footer.php');
?>
