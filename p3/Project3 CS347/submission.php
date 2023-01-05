<!-- This is a submission script to input user information into
the SQL data base.
Creation Date: 3/28/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<?php

    session_start();

    include ('php\database.php');
    require_once('php\functions.php');

    $link = $_POST["videoExample"];
    $name = $_POST["mapFor"];
    $posterid = $_SESSION["usersId"];

    $sql = "INSERT INTO `links` (`linksName`, `linksUrl`, `linksUserId`, `approved`) VALUES ('$name', '$link', '$posterid', '0');";
    mysqli_query($connection, $sql);
    header("Location: index.php");
?>