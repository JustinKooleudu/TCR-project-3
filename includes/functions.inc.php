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
function addCart($item){
    session_start();
    if(!isset($_SESSION['userid'])){
        $_SESSION['winkelwagen'] = $item;
    }
    else
    {
        header('location: index.php');
    }
    
}

function GameDisplay1($productName, $productPrice, $productImg, $productId){
    $element = '
    <form method="post">
    <div class="card card1">
        <img id="gameImage1" src="'.$productImg.'">
            <h1 id="gameName1">'.$productName.'</h1>
            <h1 id="gamePrice1">$'.$productPrice.'</h1>
            <button name="add" id="addToCart">Add to cart<i class="fa fa-shopping-cart"></i></button>
            <input type="hidden" name="productId" value='.$productId.'>
    </div>
    </form>
    ';
    echo $element;
}
function GameDisplay2($productName, $productInfo, $productPrice, $productImg){
    $element = '
    <div class="kaart kaart1">
    <img id="gameImage2" src="'.$productImg.'">
    <h1 id="gameName2">'.$productName.'</h1>
    <h1 id="gameInfo2">'.$productInfo.'</h1>
    <h1 id="gamePrice2">$'.$productPrice.'</h1>
    <button id="addToCart">Add to cart<i class="fa fa-shopping-cart"></i></button>
    </div>
    ';
    echo $element;
}
function GameDisplay3($productName, $productPrice, $productImg, $productId){
    $element = '
    <form method="post">
    <div class="card card1">
        <img id="gameImage1" src="'.$productImg.'">
            <h1 id="gameName1">'.$productName.'</h1>
            <h1 id="gamePrice1">$'.$productPrice.'</h1>
            <button name="add" id="addToCart">Add to cart<i class="fa fa-shopping-cart"></i></button>
            <input type="hidden" name="productId" value='.$productId.'>
    </div>
    </form>
    ';
    echo $element;
}

function GameCart($productName, $productPrice, $productImg){
    $element = '
<div class="cartgames">
    <img id="cartGameImg" src="'.$productImg.'">
    <div class="cartGameText">
        <h1 id="Charcarpro">'.$productName.'</h1>
        <p id="Charcompany">Seller: Rockstar games</p>
        <p id="GameType">GameType: base game</p>
        <h1 id="CharPrice">$'.$productPrice.'</h1>
        <div id="cartButtons">
            <button id="AddWish">Add to Wishlist</button>
            <button id="RemoveCart">Remove</button>
        </div>
    </div>
</div>
    ';

    echo $element;
}
function AddProduct() {

}

function getData($dat){
    include_once('dbh.inc.php');
    $sqlD = "SELECT * FROM games";
    $data = mysqli_query($dat, $sqlD);

    if(mysqli_num_rows($data)>0){
        return $data;
    }
}