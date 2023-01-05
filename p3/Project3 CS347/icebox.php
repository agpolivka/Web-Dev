<!-- This is our page to display information on the Viper lineups 
for the map Icebox in Valorant.
Creation Date: 2/12/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/Stylesheet.css">
	<title> Viper Lineups for Icebox </title>
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

<!--This page has pictures of where the lineup will land and then
in the future have links to a short demo video. -->

	<h1 class = "pageTitle">Icebox Lineups</h1>
			
	<!--These divs serve as a selector so the user can select the 
		lineup the user wants. Clicking on one of the links will
		bring you to video demo.-->
	<div class = "container">
		<div class = "mapSelectorBox">
			Icebox A Rope Molly<br>
			<a href = "https://youtu.be/3du4pZjOzHA" target="_blank">Click here for a demo</a><br><br>
			<img src="images/IceboxASiteOpenMolly.png" alt="Icebox A Open Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Icebox A Safe Molly<br>
			<a href = "https://youtu.be/dobIGVV9qGo" target="_blank">Click here for a demo</a><br><br>
			<img src="images/IceboxASiteSafeMolly.png" alt="Icebox A Safe Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Icebox B Open Molly<br>
			<a href = "">Click here for a demo (not working)</a><br><br>
			<img src="images/IceboxBSiteOpenMolly.png" alt="Icebox B Open Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Icebox B Safe Molly<br>
			<a href = "https://youtu.be/JUus90EWMmw" target="_blank">Click here for a demo</a><br><br>
			<img src="images/IceboxBSiteSafeMolly.png" alt="Icebox B Safe Molly">
		</div>
	</div>
	
</body>
<script src='js/jsFunctions.js'></script>
</html>