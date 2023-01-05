<!-- This is our profile page that displays to users options that
they have with their account.
Creation Date: 3/28/2022
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
    <title>Profile</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <!-- Greets a user looking at their profile info and shows their information-->
    <?php  
        echo "<h1 id = 'greeting'>Welcome to your profile, " . $_SESSION["usersUid"] . "</h3>!"; 
        echo "<h3 style='color: white;'  id = 'greeting'>Username: " . $_SESSION["usersName"] . "</h3>";
        echo "<h3 style='color: white;' id = 'greeting'>Email: " . $_SESSION["usersEmail"] . "</h3>";
        echo "<h3 style='color: white;'  id = 'greeting'>In game name: " . $_SESSION["usersIgn"] . "</h3>";
   ?>

    <br>
    <br>
    <!-- These are possible actions users can take with their account-->
    <div style="margin: 0 auto; width: 10%;">
   <h2 id = "greeting">Actions</h2>
   <br>
   <button style="width: 100%;" onclick="window.location.href='forgotPass.php'">Reset Password</button>
   <br>
   <br>

   <button style="width: 100%;" onclick="window.location.href='areYouSure.php'">Delete Account</button>
   
   <br>
   <br>
   <button style="width: 100%;" onclick="window.location.href='index.php'">Return Home</button>

</div>
   

</body>
</html>