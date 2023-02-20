<?php
function emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat) {
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}
function invalidUid($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat) {
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM gebruiker WHERE Username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../User/signup.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
}

function createUser($conn, $name, $username, $email, $pwd) {
    $sql = "INSERT INTO gebruiker (Name, Username, Email, Password) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../User/signup.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../User/signup.php?error=none');
    exit();
}
function emptyInputLogin($username, $pwd) {
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);
    if ($uidExists === false) {
        header('location: ../User/login.php?error=wronglogin');
        exit();
    }

    $pwdHashed = $uidExists["Password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header('location: ../User/login.php?error=wronglogin');
        exit();
    }
    elseif ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["Id"];
        $_SESSION["user"] = $uidExists["Username"];
        $_SESSION['email'] = $uidExists['Email'];
        $_SESSION['name'] = $uidExists['Name'];
        header('location: ../index.php');
        exit();
    }
}
//HOME PAGE GAME RIJ
function GameDisplay1($productName, $productPrice, $productImg, $productId){
    $element = '
    <form method="post">
    <button name="add" id="addToCart">
    <div class="card card1">
        <img id="gameImage1" src="'.$productImg.'">
        <h1 id="gameName1">'.$productName.'</h1>
        <h1 id="gamePrice1">$'.$productPrice.'</h1>
            <input type="hidden" name="productId" value='.$productId.'>
    </div>
    </button>
    </form>
    ';
    echo $element;
}
function GameDisplay2($productName, $productInfo, $productPrice, $productImg, $productId){
    $element = '
    <form method="post">
    <button name="add" id="addToCart2">
    <div class="kaart">
        <img id="gameImage2" src="'.$productImg.'">
            <h1 id="gameName2">'.$productName.'</h1>
            <p id="gameInf">'.$productInfo.'</p>
            <h1 id="gamePrice2">$'.$productPrice.'</h1>
            <input type="hidden" name="productId" value='.$productId.'>
    </div>
    </button>
    </form>
    ';
    echo $element;
}
function GameDisplay3($productName, $productPrice, $productImg, $productId){
    $element = '
    <form method="post">
    <button name="add" id="addToCart">
    <div class="card card1">
        <img id="gameImage1" src="'.$productImg.'">
            <h1 id="gameName1">'.$productName.'</h1>
            <h1 id="gamePrice1">$'.$productPrice.'</h1>
            <input type="hidden" name="productId" value='.$productId.'>
    </div>
    </button>
    </form>
    ';
    echo $element;
}
function GameDisplay4($productName, $productInfo, $productPrice, $productPrice2, $productImg, $productId){
    $element = '
    <form method="post">
    <button name="add" id="addToCart">
    <div class="spotlight4">
        <img id="gameImage3" src="'.$productImg.'">
        <h1 id="gameName1">'.$productName.'</h1>
        <h1 id="gameName2">'.$productInfo.'</h1>
        <h1 id="gamePrice1">
        <p>from $'.$productPrice2.'</p><p id="price2">to $'.$productPrice.'</p>
    </h1>
    <input type="hidden" name="productId" value='.$productId.'>
    </div></button></form>
    ';
    echo $element;
}
//GAME CART
function GameCart($productName, $productPrice, $productImg, $productId, $company){
    $element = '
    <form action="cart.php?action=remove&Id='.$productId.'" method="post">
    <div class="cartgames">
    <img id="cartGameImg" src="'.$productImg.'">
    <div class="cartGameText">
        <h1 id="Charcarpro">'.$productName.'</h1>
        <p id="Charcompany">Seller: '.$company.'</p>
        <p id="GameType">GameType: base game</p>
        <h1 id="CharPrice">$'.$productPrice.'</h1>
        <div id="cartButtons">
            <button type="submit" name="Wishlist" id="AddWish">Add to Wishlist</button>
            <button type="submit" name="remove" id="RemoveCart">Remove</button>
        </div>
    </div>
    </div>
    </form>
    ';

    echo $element;
}
//PROFILE
function CreateSetting($accInf, $accTxt){
    $element = '
    <div id='.$accInf.' class="accInf1">
    <div id="accInfLine" class="accInfLine"></div>
    <h1 id="accInf2">'.$accTxt.'</h1>
    </div>
    ';
    echo $element;
}
// CURRENT GAME
function CreateGamePage($productName, $productVideo, $productInfo, $productGenre, $ratings, $gameImg, $gamePegi, $gamePegi2, $productPrice, $productOwner, $release, $platform, $productId){
    $element = '
    <form method="post">
    <h1 id="game-title">'.$productName.'</h1>
    <div class="cartBody">
    <div class="gamedisplay-parent">
        <iframe id="game-vid" src="https://www.youtube.com/embed/'.$productVideo.'?autoplay=1&mute=1&controls=1" frameborder="0"></iframe>
        <p id="game-info">'.$productInfo.'</p>
        <h1 id="game-genre">Genre</h1>
        <p id="game-genre">'.$productGenre.'</p>
        <br>
        <hr id="game-hr">
        <h1 id="game-rating">Rating</h1>
        <p id="game-rating">'.$ratings.'</p>
    </div>
        <div class="gammeinfo-parent">
            <img id="game-img" src="'.$gameImg.'">
            <div class="pegi">
                <img id="pegi" src="'.$gamePegi.'">
                <h1>'.$gamePegi2.'</h1>
            </div>
            <h1 id="game-price">PRICE: $'.$productPrice.'</h1>
            <button name="buy" id="game-buy">BUY NOW</button>
            <button name="set" id="game-cart">ADD TO CART</button>
            <input type="hidden" name="productId" value='.$productId.'>
            <p id="game-developer">Developer: '.$productOwner.'</p>
            <hr id="game-hr">
            <p id="game-developer">Launch: '.$release.'</p>
            <hr id="game-hr">
            <p id="game-developer">Platform: '.$platform.'</p>
            <hr id="game-hr">
        </div>
    </div>
    </form>
    ';
    echo $element;
}

function createGame($conn, $naam, $prijs, $gameDiscount, $gameImage, $gameLogo, $gameVideo, $gameGenre, $gamePegi, $gamePegiImg, $gameState, $gameInfo, $gameCompany, $gameRating, $gameRelease, $gamePlatform) {
    $sql = "INSERT INTO games (naam, prijs, image, genre, Company, State, info, prijs2, image2, video, rating, pegName, pegImg, platform) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../User/signup.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $naam, $prijs, $gameImage, $gameGenre, $gameCompany, $gameState, $gameInfo, $gameDiscount, $gameLogo, $gameVideo, $gameRating, $gamePegi, $gamePegiImg, $gamePlatform);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../admin.php');
    exit();
}

//GET GLOABAL DATA FUCTION (FOR ALL) FROM DATABASE
function getData($dat, $sqlCommand){
    include_once('dbh.inc.php');
    $sqlD = $sqlCommand;
    $data = mysqli_query($dat, $sqlD);

    if(mysqli_num_rows($data)>0){
        return $data;
    }
}