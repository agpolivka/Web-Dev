<!-- This is our about page that displays information about the creators
of the website and describes what the project was for.
Creation Date: 4/27/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/Stylesheet.css">
	<title> About Us </title>
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

<!--This page has information about the group members
and a brief description of what this project was for. -->

	<h1 class = "pageTitle">About Us</h1>
		<p id = pageDescription class = "pageDescription"> Below is a little more information about each of the team members that worked on the project.<br></p>
		
			
	<!--These divs serve as descriptions about us.-->
	<div class = "container">
		<div class = "aboutUsSelectorBox">
			<h2>Tate Lemm</h2>
			<ul>
            	<li>Junior CS Major</li>
            	<li>On the JMU Valorant Esports Team</li>
				<li>Drinks 3 extra large cups of water per day</li>
        	</ul>
		</div>
	
		<div class = "aboutUsSelectorBox">
			<h2>Devon Boldt</h2>
			<ul>
            	<li>Junior CS Major</li>
            	<li>Fell off ski lift in 7th grade</li>
				<li>Drinks 10-11 large cups of water per day</li>
        	</ul>
		</div>
	
		<div class = "aboutUsSelectorBox">
			<h2>Mason Marker</h2>
			<ul>
            	<li>Junior CS Major</li>
            	<li>Likes going to the gym</li>
				<li>Video games (Valorant, Rocket League)</li>
				<li>Enjoys a solid chess match</li>
				<li>Drinks 7 large cups of water per day</li>
        	</ul>
		</div>

		<div class = "aboutUsSelectorBox">
			<h2>Alex Polivka</h2>
			<ul>
            	<li>Senior CS Major</li>
            	<li>Likes Washington D.C. sports</li>
				<li>Drinks 8-9 large cups of water per day</li>
        	</ul>
		</div>
		
		<!-- This div describes the project and purpose -->
		<div class = "aboutUsSelectorBox">
			<h2>About this project</h2>
			This project was a semester long project for our CS 347 web development class. 
			Throughout this project, the 4 of us learned how to implement a full stack website. 
			Devon and Mason started this project with Tate joining in the second phase and 
			Alex joining in the third. This project has been a huge learning curve and has 
			taught all of us the importance of front and back end development. We hope that 
			you have enjoyed the complete production of our website and appreciate you for 
			stopping by and looking at it. And just remember, "Bodies decompose after 12 
			hours in acid ... there's no reason why I know that." -- Viper
		</div>
		
		<!-- This div holds a picture of the JMU logo -->
		<div class = "aboutUsSelectorBox">
			<h2>Go Dukes!</h2>
			<img src="images/dukeDog.png" alt="Duke Dog">
		</div>
	</div>
	
</body>
<script src='js/jsFunctions.js'></script>
</html>