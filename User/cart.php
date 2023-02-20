<?php
include_once('../head-footer/EXheader.php');
include_once('../includes/functions.inc.php');
include_once('../includes/dbh.inc.php');
if(!isset($_SESSION['userid'])) {
    header('location: ../User/login.php');
}
if(isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value['productId'] == $_GET['Id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
?>
<section id="cart">
        <nav id="cart"></nav>
        <h1 id="cartTitle">My Cart</h1>
        <div class="cartBody">
        <div class="cart">
            <?php
            $total = 0;
            if (isset($_SESSION['cart'])){
                $itemId = array_column($_SESSION['cart'], 'productId');
                $result = getData($conn, "SELECT * FROM games");
                while ($row = mysqli_fetch_assoc($result)){
                    foreach ($itemId as $id){
                        if($row['Id'] == $id){
                            GameCart($row['naam'],$row['prijs'],$row['image'],$row['Id'],$row['Company']);
                            $total = $total + (int)$row['prijs'];
                        }
                    }
                }
            }
            else
            {
                echo "<h5>Cart is Empty</h5>";
            }
            ?>
            </div>
            <div class="cartSubtotal">
                <h1 id="cartSubtotal">Cart Games</h1>
                <h2 id="cartSubtotal"><?php if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "Total Games: ".($count).""; }else{ echo "Price 0";}?></h2>
                <h3 id="cartSubtotal">Actual Price: <?php echo '$'.$total;?></h3>
                <h3 id="cartSubtotal">inflation Taxes: <?php $tax = $total / 100 * 30; echo '$'.$tax;?></h3>
                <hr id="cart">
                <h4 id="cartSubtotal">Subtotal: <?php echo '$'.$total + $tax; ?></h4>
                <button id="cartSubtotal">Check out</button>
            </div>
        </div>
</section>
<?php
include_once('../head-footer/EXfooter.php');
?>