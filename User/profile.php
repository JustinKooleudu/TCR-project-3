<?php
include_once('../includes/dbh.inc.php');
include_once('../head-footer/EXheader.php');
include_once('../includes/functions.inc.php');

if (isset($_GET['catagory'])){
    if ($_GET['catagory'] == "accSettings"){

    }
    if ($_GET['catagory'] == "accEmail"){
        
    }
    if ($_GET['catagory'] == "accPayment"){
        
    }
    if ($_GET['catagory'] == "accPassword"){
        
    }
    if ($_GET['catagory'] == "accFeedback"){
        
    }
}

if(!isset($_SESSION['userid'])) {
    header('location: ../User/login.php');
}else{
        CheckIfBanned($conn, $uid, 2);
}
?>

<section id="Profile">
    <nav id="Profile">
        <?php
        CreateSetting("1", "ACCOUNT SETTINGS");
        CreateSetting("2", "EMAIL SETTINGS");
        CreateSetting("3", "PAYMENT MANAGMENT");
        CreateSetting("4", "PASSWORD & SECURITY");
        CreateSetting("5", "FEEDBACK");
        CreateSetting("6", "REEDEM CODE");
        ?>
    </nav>
    <div id="Profile">
    <div class="proflieSet1">
        <div class="AccBG">
            <img id="AccImg" src="../docs/Slide4.png">
        </div>
        <div class="AccBG2">
            <h1><?php echo $_SESSION['name']; ?></h1>
            <p><?php echo '@'.$_SESSION['user']; ?></p>
            <p><?php echo 'id= '.$_SESSION['userid']; ?></p>
            <p><?php echo $_SESSION['email']; ?></p>
            <div class="AccBG3"><input type="text" placeholder="<?php echo $_SESSION['user']; ?>" disabled><button class="fa fa-pencil"></button><p>Change ur username</p></div>
            <div class="AccBG3"><input type="password" placeholder="••••••••••••" disabled><button class="fa fa-pencil"></button><p>Change ur password</p></div></div>
        <div class="AccSec">
            <h1>Games Bought</h1>
        </div>
        
    </div></div></section>


<?php
include_once '../head-footer/EXfooter.php';
?>

<!-- retourpolicy
geschiedenis
email
payment
password
leverancier
klacht -->
