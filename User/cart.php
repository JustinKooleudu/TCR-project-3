<?php
include_once('../head-footer/EXheader.php');
if(!isset($_SESSION['userid'])) {
    header('location: ../User/login.php');
}
?>
<section id="cart">
        <nav id="cart"></nav>
        <h1 id="cartTitle">My Cart</h1>
        <div class="cartBody">
        <div class="cart">
            <div class="cartgames">
                <img id="cartGameImg" src="../docs/GameId2.png">
                <div class="cartGameText">
                    <h1 id="Charcarpro">Product 1</h1>
                    <p id="Charcompany">Seller: Rockstar games</p>
                    <p id="GameType">GameType: base game</p>
                    <h1 id="CharPrice">$599</h1>
                    <div id="cartButtons">
                        <button id="AddWish">Add to Wishlist</button>
                        <button id="RemoveCart">Remove</button>
                    </div>
                </div>
            </div>
            </div>
            <div class="cartSubtotal">
                <h1 id="cartSubtotal">Cart Games</h1>
                <h2 id="cartSubtotal">Price</h2>
                <h3 id="cartSubtotal">Taxes</h3>
                <h4 id="cartSubtotal">Subtotal</h4>
                <button id="cartSubtotal">Check out</button>
            </div>
        </div>
</section>
<?php
include_once('../head-footer/EXfooter.php');
?>