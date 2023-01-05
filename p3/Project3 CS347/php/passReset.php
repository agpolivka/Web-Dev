<?php 

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $ign = $_POST["ign"];
    $pwd = $_POST["newPwd"];
    $pwdRepeat = $_POST["newPwdRepeat"];

    require_once 'database.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $email, $username, $ign, $pwd, $pwdRepeat, $result) !== false) {
        header("location: ../forgotPass.php?error=emptyInput");
        exit();
    }

    if (invalidUid($username, $result) !== false) {
        header("location: ../forgotPass.php?error=invalidUid");
        exit();
    }

    if (invalidEmail($email, $result) !== false) {
        header("location: ../forgotPass.php?error=invalidEmail");
        exit();
    }

    if (pwdStrength($pwd, $result) !== false) {
        header("location: ../forgotPass.php?error=passWeak");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat, $result) !== false) {
        header("location: ../forgotPass.php?error=passDontMatch");
        exit();
    }

    newPass($connection, $name, $email, $username, $ign, $pwd);

}
else {
    header("location: ../forgotPass.php");
    exit();
}