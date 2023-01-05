<?php 

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $ign = $_POST["ign"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'database.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $email, $username, $ign, $pwd, $pwdRepeat) !== false) {
        header("location: ../signUpPage.php?error=emptyInput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signUpPage.php?error=invalidUid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signUpPage.php?error=invalidEmail");
        exit();
    }

    if (pwdStrength($pwd) !== false) {
        header("location: ../signUpPage.php?error=passWeak");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signUpPage.php?error=passDontMatch");
        exit();
    }

    if(uidExists($connection, $username, $email) !== false){
        header("location: ../signUpPage.php?error=userTaken");
        exit();
    }

    createUser($connection, $name, $email, $username, $ign, $pwd);

}
else {
    header("location: ../signUpPage.php");
    exit();
}