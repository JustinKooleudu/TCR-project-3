<?php
include_once('../head-footer/EXheader.php');
if(!isset($_SESSION['userid'])) {
    header('location: ../User/login.php');
}
?>

<section id="ProfilePage">
<nav id="ProfileNav"></nav>
<div id="HOME">
    <div class="one"><h1 id="accSett">PROFILE</h1></div>
    <div class="two"><div class="profileBalk"></div>
    <div class="profileBalk2">
        <div class="Pb"><h1 id='nameProfile'>Name: </h1><h1 id='Curname'><?php echo $name;?></h1></div>
        <div class="Pb Pb2"><h1 id='nameProfile'>Username: </h1><h1 id='Curname'><?php echo $username;?></h1></div>
        <div class="Pb"><h1 id='nameProfile'>Email: </h1><h1 id='Curname'><?php echo $email;?></h1></div>
        <div class="Pb Pb2"><h1 id='nameProfile'>Country: </h1><h1 id='Curname'><?php echo 'NILL';?></h1></div>
        <div class="Pb"><h1 id='nameProfile'>Verified: </h1><h1 id='Curname'><?php echo 'NILL';?></h1></div></div></div>
</div>
<div id="accountSettinngs">
    <h1 id="accSett">ACCOUNT SETTINGS</h1>
    <p id="accSett">Mange your account details</p>
    <h1 id="accIinf">ACCOUNT INFORMATION</h1>
    <p id="accIinf">id <?php echo $uid;?></p>
    <form id="accUsr" action="">
        <div class="user"><h1 id="accUid">Username</h1><input id="acc" type="text" placeholder="<?php echo $username;?>" ><button id="acc"></button></div>
        <div class="email"><h1 id="accUid">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1><input id="acc" type="text" placeholder="<?php echo $email;?>" ><button id="acc"></button></div>
    </form>
    <h1 id="accDet">PERSONAL DETAILS</h1>
    <form id="accUsr" action=""><div class="user"><h1 id="accUid">Real Name</h1><input id="acc" type="text" placeholder="<?php echo $name;?>" ><button id="acc"></button></div></form>
    <h1 id="accAdr">COUNTRY</h1>
    <form id="accUsr" action=""><div class="user"><h1 id="accUid">Country</h1><input id="acc" type="text" placeholder="<?php echo $name;?>" ><button id="acc"></button></div></form>
    <h1 id="accAdr">DELETE ACCOUNT</h1>
    <button id="delete">DELETE ACCOUNT</button>
</div>
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
