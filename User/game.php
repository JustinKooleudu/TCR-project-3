<?php
include_once('../head-footer/EXheader.php');
include_once('../includes/functions.inc.php');
include_once('../includes/dbh.inc.php');

$_SESSION['firstTime'] = true;

if(!isset($_SESSION['userid'])) {
    header("location: User/login.php");
}else{
        CheckIfBanned($conn, $uid, 2);
    if (isset($_SESSION['cart'][0])) {
        if ($_SESSION['firstTime'] == true){
            $_SESSION['firstTime'] = false;
        }
    }
        $item_ary_id = array_column($_SESSION['cart'], 'productId');

        if (isset($_POST['set'])){
        if(in_array($_POST['productId'], $item_ary_id)){
            echo "<script>alert('product already in cart');</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_ary = array('productId' => $_POST['productId']);
            $_SESSION['cart'][$count] = $item_ary;
            header("location: ../User/cart.php");
        }
    }
}
?>
<section id="cart">
        <nav id="cart"></nav>
        <?php
            $result = getData($conn, "SELECT * FROM games WHERE naam = 'Grand Blox Auto';");
            $MaxCards = 0;

            if (isset($_SESSION['cart'])){
                $gameId = $_SESSION['CurrentGame'];
                $result = getData($conn, "SELECT * FROM games");

                while ($row = mysqli_fetch_assoc($result)){
                        if($row['Id'] == $gameId){
                            CreateGamePage($row['naam'],$row['video'],$row['info'],$row['genre'],$row['rating'],
                            $row['image2'],$row['pegImg'],$row['pegName'],$row['prijs'],$row['Company'],$row['release'],$row['platform'],$row['Id']);
                        }
                }
            }
        ?>
</section>

<?php
include_once('../head-footer/EXfooter.php');
?>