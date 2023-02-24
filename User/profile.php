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
        CreateSetting("ACCOUNT SETTINGS", "account");
        CreateSetting("ORDERS", "orders");
        CreateSetting("PAYMENT MANAGMENT", "payment");
        CreateSetting("PASSWORD & SECURITY", "security");
        CreateSetting("FEEDBACK", "feedback");
        CreateSetting("REEDEM CODE", "reedem");
        ?>
    </nav>

    <!-- <div class="profile-parent">
                <div class="account-tumbnail"><img src="../docs/Discover1.png"></div>
                <div class="account-body">
                    <h1 id="account-title">ACCOUNT SETTINGS</h1>
                    <h1>Welcome '.$name.'</h1>
                    <p>ID: '.$uid.'</p>
                    <p>Username: @'.$username.'</p>

                    <div class="account-button-parent">
                        <div class="account-label"><p>Real Name</p><h2>'.$name.'</h2></div>
                        <button id="account-label" type="submit"><i class="fa fa-pencil"></i></button>
                    </div>
                    <div class="account-button-parent">
                        <div class="account-label"><p>Username</p><h2>'.$username.'</h2></div>
                        <button id="account-label" type="submit"><i class="fa fa-pencil"></i></button>
                    </div>
                    <h1>Country</h1>
                    <div class="account-button-parent">
                        <div class="account-label"><p>your country</p><h2>Unknown</h2></div>
                        <button id="account-label" type="submit"><i class="fa fa-pencil"></i></button>
                    </div>
                    <h1 id="account-delete">Account Delete</h1>
                    <div class="account-delete">
                        <p id="account-delete">
                            note: if you click to delete your account there is no way back
                            you still need to verify by your email to delete your account.
                        </p>
                        <button>Delete Account</button>
                    </div>
                </div>
            </div> -->

    <?php
    if(isset($_GET['setting'])){
        if ($_GET['setting'] == "account"){
            $elemnt = '
            <div class="profile-parent">
            <div class="account-tumbnail"><img src="../docs/Discover1.png"></div>
            <div class="account-body">
                <h1 id="account-title">ACCOUNT SETTINGS</h1>
                <h1>Welcome '.$name.'</h1>
                <p>ID: '.$uid.'</p>
                <p>Username: @'.$username.'</p>

                <div class="account-button-parent">
                    <div class="account-label"><p>Real Name</p><h2>'.$name.'</h2></div>
                    <button id="account-label" type="submit"><i class="fa fa-pencil"></i></button>
                </div>
                <div class="account-button-parent">
                    <div class="account-label"><p>Username</p><h2>'.$username.'</h2></div>
                    <button id="account-label" type="submit"><i class="fa fa-pencil"></i></button>
                </div>
                <h1>Country</h1>
                <div class="account-button-parent">
                    <div class="account-label"><p>your country</p><h2>Unknown</h2></div>
                    <button id="account-label" type="submit"><i class="fa fa-pencil"></i></button>
                </div>
                <h1 id="account-delete">Account Delete</h1>
                <div class="account-delete">
                    <p id="account-delete">
                        note: if you click to delete your account there is no way back
                        you still need to verify by your email to delete your account.
                    </p>
                    <button>Delete Account</button>
                </div>
            </div>
        </div>
            ';
            echo $elemnt;
        }
        if ($_GET['setting'] == "orders"){
            $elemnt = '
            <div class="profile-parent">
            <div class="account-body">
                <h1 id="account-title">MY ORDERS</h1>
                <h1>Welcome Full name</h1>
                <p>ID: UserId</p>
                <p>Username: Username</p>  
            </div>
            </div>
            ';
            echo $elemnt;
        }
        if ($_GET['setting'] == "payment"){
            $elemnt = '
            <div class="profile-parent">
            <div class="account-body">
                <h1 id="account-title">PAYMENT SETTINGS</h1>
                <h1>Welcome Full name</h1>
                <p>ID: UserId</p>
                <p>Username: Username</p>  
            </div>
            </div>
            ';
            echo $elemnt;
        }
        if ($_GET['setting'] == "security"){
            $elemnt = '
            <div class="profile-parent">
            <div class="account-body">
                <h1 id="account-title">SECURITY SETTINGS</h1>
                <h1>Welcome Full name</h1>
                <p>ID: UserId</p>
                <p>Username: Username</p>  
            </div>
            </div>
            ';
            echo $elemnt;
        }
        if ($_GET['setting'] == "feedback"){
            $elemnt = '
            <div class="profile-parent">
            <div class="account-body">
                <h1 id="account-title">GIVE FEEDBACKS</h1>
                <h1>Welcome Full name</h1>
                <p>ID: UserId</p>
                <p>Username: Username</p>  
            </div>
            </div>
            ';
            echo $elemnt;
        }
        if ($_GET['setting'] == "reedem"){
            $elemnt = '
            <div class="profile-parent">
            <div class="account-body">
                <h1 id="account-title">REEDEM CODES</h1>
                <h1>Welcome Full name</h1>
                <p>ID: UserId</p>
                <p>Username: Username</p>  
            </div>
            </div>
            ';
            echo $elemnt;
        }
    }


    ?>

</section>


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
