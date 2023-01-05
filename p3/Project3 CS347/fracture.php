<!-- This is our page to display information on the Viper lineups 
for the map Fracture in Valorant.
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
	<title> Viper Lineups for Fracture </title>
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

	<h1 class = "pageTitle">Fracture Lineups</h1>
			
	<!--These divs serve as a selector so the user can select the 
		lineup the user wants. Clicking on one of target="_blank" the links will
		bring you to video demo.-->
	<div class = "container">
		<div class = "mapSelectorBox">
			Fracture A Top Molly<br>
			<a href = "https://youtu.be/IyvAWDU5vqU" target="_blank">Click here for a demo</a><br><br>
			<img src="images/FractureASiteDefaultMolly.png" alt="racture A Default Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Fracture A Deep Molly<br>Click here for a demo (not working)<br><br>
			<img src="images/FractureASiteDeepMolly.png" alt="Fracture A Deep Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Fracture B Safe Molly<br>
			<a href = "https://youtu.be/AFsESea4hy0?t=179" target="_blank">Click here for a demo</a><br><br>
			<img src="images/FractureBSiteSafeMolly.png" alt="Fracture B Safe Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Fracture B Box Molly<br>
			<a href = "https://youtu.be/B_zLIE7HK88" target="_blank">Click here for a demo</a><br><br>
			<img src="images/FractureBSiteBoxMolly.png" alt="Fracture B Box Molly">
		</div>
	</div>
	
</body>
<script src='js/jsFunctions.js'></script>
</html>