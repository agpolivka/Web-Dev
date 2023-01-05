<?php

function emptyInputSignup($name, $email, $username, $ign, $pwd, $pwdRepeat) {

    if (empty($name) || empty($email) || empty($username) || empty($ign) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($username, $pwd) {
    

    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

//Needs to have one upper case letter, one number and atleast 6 chars long.
function pwdStrength($pwd) {

    if (!preg_match("/^(?=.*[0-9])(?=.*[A-Z]).{6,}$/", $pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {

    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($connection, $username, $email) {

    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signUpPage.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($connection, $name, $email, $username, $ign, $pwd) {

    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersIgn, usersPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signUpPage.php?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $ign, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signUpPage.php?error=none");
    exit();
}

function deleteUser($connection, $id) {
    $id = $_SESSION["usersId"];
    $sql = "DELETE FROM users WHERE usersId = $id";

    if (mysqli_query($connection, $sql)) {
        session_unset();
        session_destroy();
        header("location: ../logOutPage.php");
        exit();
    }
}

function loginUser($connection, $username, $pwd) {
    $uidExists = uidExists($connection, $username, $username);

    if($uidExists === false) {
        header("location: ../logInPage.php?error=noUser");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../logInPage.php?error=wrongPass");
        exit();
    }
    elseif($checkPwd === true) {
        session_start();
        $_SESSION["usersId"] = $uidExists["usersId"];
        $_SESSION["usersUid"] = $uidExists["usersUid"];
        $_SESSION["usersName"] = $uidExists["usersName"];
        $_SESSION["usersEmail"] = $uidExists["usersEmail"];
        $_SESSION["usersIgn"] = $uidExists["usersIgn"];
        header("location: ../index.php");
        exit();
    }
}

function newPass($connection, $name, $email, $username, $ign, $pwd) {
    $sql = "UPDATE users SET usersPwd = ? WHERE usersName = ? AND usersEmail = ? AND usersUid = ? AND usersIgn = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../forgotPass.php?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $hashedPwd, $name, $email, $username, $ign);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../forgotPass.php?error=none");
    exit();

}

function listRequests($connection) {
    $sql = "SELECT * FROM links;";
    $result = mysqli_query($connection, $sql);
    $resultData = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $resultData;
}

function getUsername($connection, $id) {
    $sql = "SELECT usersName FROM users WHERE usersId = $id;";
    $result = mysqli_query($connection, $sql);
    $resultData = mysqli_fetch_assoc($result);
    return $resultData["usersName"];
}

function approveLink($connection, $id) {
    $sql = "UPDATE `links` SET `approved` = '1' WHERE `links`.`linksId` = $id;";
    if (mysqli_query($connection, $sql)) {
        header("location: admin.php");
        exit();
    }
    debug("identifier: " . $id);
}

function disapproveLink($connection, $id) {
    $sql = "UPDATE `links` SET `approved` = '0' WHERE `links`.`linksId` = $id;";
    if (mysqli_query($connection, $sql)) {
        header("location: admin.php");
        exit();
    }
}

function deleteLink($connection, $id) {
    $sql = "DELETE FROM `links` WHERE `links`.`linksId` = $id;";
    if (mysqli_query($connection, $sql)) {
        header("location: admin.php");
        exit();
    }
}

function debug($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

