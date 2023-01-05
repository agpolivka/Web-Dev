<!-- This is our page that deals with account deletion
Creation Date: 4/19/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<?php
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are You Sure?</title>
</head>
<body style="background-color: black; color: white; text-align: center;">
    <h1>We're sad to see you go so soon!</h1>
    <h2>Are you sure you want to delete your account?</h2>
    <br>
    <br>
    <form action="php/deleteAccount.php" method="post">
      <button type="submit" name="delete">Yes, delete my account</button>
    </form>
    <br>
    <button onclick="window.location.href='profile.php'" >No, take me back</button>
</body>
</html>