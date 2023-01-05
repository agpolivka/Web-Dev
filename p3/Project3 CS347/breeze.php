<!-- This is our page to display information on the Viper lineups 
for the map Breeze in Valorant.
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
	<title> Viper Lineups for Breeze </title>
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

	<h1 class = "pageTitle">Breeze Lineups</h1>
		<p class = "pageDescription"> This Page is a work in progress I hope to get in game footage and 
			link the videos to when you click on the link button<br><br></p>
		
			
	<!--These divs serve as a selector so the user can select the 
		lineup the user wants. Clicking on one of target="_blank" the links will
		bring you to video demo.-->
	<div class = "container">
		<div class = "mapSelectorBox">
			Breeze A Default Molly<br>
			<a href = "https://youtu.be/GnBg44OayQ4" target="_blank">Click here for a demo</a><br><br>
			<img src="images/BreezeASiteDefaultMolly.png" alt="Breeze A Default Molly">
		</div>
	
		<div class = "mapSelectorBox">
			Breeze Mid Smoke<br>Click here for a demo (not working)<br><br>
			<img src="images/BreezeMidSmoke.png" alt="Breeze Mid Smoke">
		</div>
	
		<div class = "mapSelectorBox">
			Breeze B Default Molly<br> 
			<a href = "https://youtu.be/1dNzIn4zQ1Q" target="_blank">Click here for a demo</a><br><br>
			<img src="images/BreezeBSiteDefaultMolly.png" alt="Breeze B Default Molly">
		</div>
	</div>
	
</body>
<script src='js/jsFunctions.js'></script>
</html>