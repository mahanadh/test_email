<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 8/30/2018
 * Time: 3:50 PM
 */

session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<html>
<style>
    .container {
        width: 40%;
        margin: 0 auto;
        background-color: #f7f7f7;
        color: #757575;
        font-family: 'Raleway', sans-serif;
        text-align: left;
        padding: 30px;
    }
    h2 {
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 10px;
    }
    .container p {
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 20px;
    }
    .regisFrm input[type="text"], .regisFrm input[type="email"], .regisFrm input[type="password"] {
        width: 94.5%;
        padding: 10px;
        margin: 10px 0;
        outline: none;
        color: #000;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
    }
    .send-button {
        text-align: center;
        margin-top: 20px;
    }
    .send-button input[type="submit"] {
        padding: 10px 0;
        width: 60%;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        font-weight: 500;
        border: none;
        outline: none;
        color: #FFF;
        background-color: #2196F3;
        cursor: pointer;
    }
    .send-button input[type="submit"]:hover {
        background-color: #055d54;
    }
    a.logout{float: right;}
    p.success{color:#34A853;}
    p.error{color:#EA4335;}
</style>

<h2>Enter the Email of Your Account to Reset New Password</h2>
<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<div class="container">
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <div class="send-button">
                <input type="submit" name="forgotSubmit" value="CONTINUE">
            </div>
        </form>
    </div>
</div>
</html>