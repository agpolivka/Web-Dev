<?php 

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

	require_once 'database.php';
    require_once 'functions.php';

	if (emptyInputLogin($username, $pwd, $result) !== false) {
        header("location: ../logInPage.php?error=emptyInput");
        exit();
    }

	loginUser($connection, $username, $pwd, $email);
}
else {
	header("location: ../logInPage.php");
    exit();
}