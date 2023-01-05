
<?php 
    session_start();

    include('database.php');
    require_once('functions.php');

    $id = $_SESSION["usersId"];
    
    deleteUser($connection, $id);
?>