<!-- This is our admin code that helps deal with when the admin
logs into the website and shows the special features they have
available to them.
Creation Date: 2/28/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<?php
	session_start();
    include ('php\database.php');
    require_once('php\functions.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body style="color: black;">

    <!-- Simple greeting to the admin -->
    <h1 id="greeting">Admin Control Panel</h1>
    <h3 id="greeting">Link Requests:</h3>
    <div class = 'adminControlBox'>
        <p> Hello Admin, Here you can Approve new links to add to the site! <p>
        <a href="index.php">Back Home</a>
    </div>
    <?php
    //recieves the requested links to be posted
    //then allows the admin to either approve, dissaprove, or delete them.
      $requests =  listRequests($connection);
       foreach ($requests as $request) {
        $url = $request['linksUrl'];
        $id = $request['linksUserId'];
        $name = getUserName($connection, $id);
        echo "<div class = 'adminControlBox'>";
        echo $request['linksId'] . ": " . $request["linksName"] . ", " . "<a href=$url target='_blank'>$url<a/><br/>";
        echo "Posted by " . $name . "<br/>";
        if ($request['approved'] == 1) {
            echo "Approved";
        } else {
            echo "Not Approved";
        }
        echo "<br/>";

        $linkid = $request['linksId'];
        echo "<form action='adminConfirmation.php' method='post'>"; 
        echo "  <input type='hidden' name='id'" . "value = $linkid" . "'>";
        echo "  <button type='delete' name='delete'>Delete</button>";
        echo "  <button type='approve' name='approve'>Approve</button>";
        echo "  <button type='disapprove' name='dis'>Disapprove</button>";
        echo "  </form>";
        echo "<br>";
        echo "</div>";
       }  
    ?>

</body>
</html>