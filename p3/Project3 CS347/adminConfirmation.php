<!-- This is another script for our admin to either approve, dissaprove, or 
delete a link that has been requested.
Creation Date: 2/28/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<?php

session_start();

include ('php\database.php');
require_once('php\functions.php');

$identifier =  intval($_POST["id"]);

if (isset($_POST["delete"])) {
    deleteLink($connection, $identifier);
} elseif (isset($_POST["approve"])) {
    approveLink($connection, $identifier); 
} elseif (isset($_POST["dis"])) {
    disapproveLink($connection, $identifier);
}

?>
