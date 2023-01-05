<!-- This is our log out page that displays logout information.
Creation Date: 3/28/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/Stylesheet.css">
	<title> Logged Out </title>
</head>
<body>

<!-- Navigation bar for top of the page. -->
<ul class = "menuBar">
	<li class = "menu">
		<button onclick= "myFunction()" class="menuButton">Menu</button>
		<div id="menuDropdown" class="navOptions">
			<a href="index.php" method="post"  >Home</a>
			<?php
				if(isset($_SESSION["usersUid"])) {
					echo "<a href='profile.php'>Profile</a>" ;
					echo "<a href='php/logout.php'>Log Out</a>" ;
					echo "<a href='about.php'>About Us</a>";
				} else {
					echo "<a href='signUpPage.php'>Sign Up</a>" ;
					echo "<a href='logInPage.php'>Login</a>" ;
					echo "<a href='about.php'>About Us</a>";
				}
			?>
		</div>
  	</li>
</ul>

<!-- Logged out message page. -->

	<h1 class = "pageTitle" pageTitle>Logged out!</h1>
		
			
	<!--This is the logout message and gives you directions
	on how to return to the home page.-->
	<div class = "signUpContainer">
    <div class = "mapSelectorBox">
            <h2>The user has been logged out!</h2><br><br>
			<h2>Click here or the home at in the Navigation bar to return to the homepage.</h2><br><br>
            <h1><a href="index.php">Home</a></h1>
		</div>
	</div>
	
</body>
<script src='js/jsFunctions.js'></script>
</html>