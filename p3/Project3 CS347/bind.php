<!-- This is our page to display information on the Viper lineups 
for the map Bind in Valorant.
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
	<title> Viper Lineups for Bind </title>
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

	<h1 class = "pageTitle" pageTitle>Bind Lineups</h1>
			
	<!--These divs serve as a selector so the user can select the 
		lineup the user wants. Clicking on one of target="_blank" the links will
		bring you to video demo.-->
	<div class = "container">
		<div class = "mapSelectorBox">
			Bind A Default Molly<br>
			<a href = "https://youtu.be/L8oI8oUTJj8" target="_blank">Click here for a demo</a><br><br>
			<img src="images/BindASiteDefaultMolly.png" alt="Bind A Default Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Bind A Triple Molly<br>
			<a href = "https://youtu.be/ioGhAF5uLpM" target="_blank">Click here for a demo</a><br><br>
			<img src="images/BindASiteTripleMolly.png" alt="Bind A Triple Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Bind B Default Molly<br>
			<a href = "https://youtu.be/jJ-q5A3o4yU" target="_blank">Click here for a demo</a><br><br>
			<img src="images/BindBSiteDefaultMolly.png" alt="Bind B Default Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Bind B Open Molly<br>
			<a href = "https://youtu.be/fJciOmzfhCE" target="_blank">Click here for a demo</a><br><br>
			<img src="images/BindBSiteOpenMolly.png" alt="Bind B Open Molly">
		</div>
	</div>
	
</body>
<script src='js/jsFunctions.js'></script>
</html>