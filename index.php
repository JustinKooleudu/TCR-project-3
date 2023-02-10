<?php
    include_once('Head/1header.php');
    require("config/config.php");
if (!empty($_SESSION['id'])){
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM gebruiker WHERE Id = $id");
    $row = mysqli_fetch_assoc($result);
    print_r($_SESSION);
}
else
{
    // header("Location: main.php");
}
?>

<section id="oneIndex">
            <img id="currentDisplay" src="docs/Test1.png">
        <div class="Side"></div>
    </section>

    <div id="HeightCorrection">
        <div class="line"></div>
        <h1 id="welcome">
            <?php
         ?></h1>
    </div>

    <div id='SignIN'></div>

    <section id="gamepass">

        <container id="A">
        <div class="pass pass1">
            <img src="docs/test2.jpg">
            <div id="Info">
                <h1>
                    <?php print_r($_SESSION['name']); ?>
                </h1>
            </div>
        </div>
        <div class="pass pass2">
        <img src="docs/test2.jpg">
            <div id="Info">
            <h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem asperiores,
                     earum dolorem consequuntur sed, explicabo rerum, cupiditate rem a fugit ducimus inventore veniam 
                </h1>
            </div>
        </div>
        <div class="pass pass3">
        <img src="docs/test2.jpg">
            <div id="Info">
            <h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem asperiores,
                     earum dolorem consequuntur sed, explicabo rerum, cupiditate rem a fugit ducimus inventore veniam 
                </h1>
            </div>
        </div>
    </container>


    <container id="B">
        <div class="pass pass4">
            <img src="docs/test.webp">
            <div id="Info"></div>
        </div>
        <div class="pass pass5">
            <img src="docs/test.webp">
            <div id="Info"></div>
        </div>
        <div class="pass pass6">
            <img src="docs/test.webp">
            <div id="Info"></div>
        </div>
    </container>

    </section>

    <?php
    include_once('Head/Footer1.php'); 
?>