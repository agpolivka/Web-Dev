<!-- This is our home page that displays what maps you would
like to learn more information about and explains the purpose of
the site.
Creation Date: 2/12/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<?php
	session_start();
	include ('php\database.php');
	require_once('php\functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/stylesheet.css">
	<title> Viper Lineup Guides </title>
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

<!--
<ul class = "navBar">
	<li class = "navListLeft"><a class = "navOption" href="index.php">Home</a></li>
	<php
		if(isset($_SESSION["usersUid"])) {
			echo "<li class = 'navListRight'><a class = 'navOption' href='profile.php'>Profile</a></li>" ;
			echo "<li class = 'navListRight'><a class = 'navOption' href='php/logout.php'>Log Out</a></li>" ;
		} else {
			echo "<li class = 'navListRight'><a class = 'navOption' href='signUpPage.php'>Sign Up</a></li>" ;
			echo "<li class = 'navListRight'><a class = 'navOption' href='logInPage.php'>Login</a></li>" ;
		}
	?>

</ul>
-->

<!--This site will display lineups for a given map for the game Valorant.
These lineups are for the agent Viper and when you click on the maps it will
take you to a map page where you can select specific lineups. (tutorial 
on how to get the ability to land there, short video) -->
	<h1 class = "pageTitle">Viper Lineup Map Shortcut</h1>
		<p class = "pageDescription"> This shortcut map was designed to try and help people who don't want to spend hours learning all the neccassary
			lineups to play viper.<br>Click on a map name to find lineups for that map!<br><br>
			
			<?php
				if(isset($_SESSION["usersUid"])) {
					echo "<p id = 'greeting'></p>";
				} else {
					echo "<a class='topLink' href='https://valorant.fandom.com/wiki/VALORANT_Wiki'>Click here to learn more about the game Valorant.</a>" ;
				}
			?>	
		</p>
			
	<!--These divs serve as a selector so the user can select the 
		map the user wants to find lineups for. Clicking on one of
		the map names will bring you to the coorsponding page.-->
	<div class = "container">
		<div class = "mapSelectorBox">
			<a class = "mapLink" href="Bind.php">Bind</a><br><br>
			<img src="images/LoadingScreenBind.png" alt="Bind Screen">
		</div>
	
		<div class = "mapSelectorBox">
			<a class = "mapLink" href="Icebox.php">Icebox</a><br><br>
			<img src="images/LoadingScreenIcebox.png" alt="Icebox Screen">
		</div>
	
		<div class = "mapSelectorBox">
			<a class = "mapLink" href="Breeze.php">Breeze</a><br><br>
			<img src="images/LoadingScreenBreeze.png" alt="Breeze Screen">
		</div>
	
		<div class = "mapSelectorBox">
			<a class = "mapLink" href="Fracture.php">Fracture</a><br><br>
			<img src="images/LoadingScreenFracture.png" alt="Fracture Screen">
		</div>
		
		<!-- This will eventually make it to a database as well-->
		<?php
		if(isset($_SESSION["usersUid"])) {
			echo "<div id = 'fader' class = 'mapSelectorBox'>";
			echo 	"SUBMIT YOUR OWN LINEUP!<br><br>";
			echo 	"<form action='submission.php' method='post'>";
			echo 		"<label for='mapFor'>Map the lineup is on:</label><br>";
			echo 		"<input type='text' id='mapFor' name='mapFor'><br>";
			echo 		"<label for='videoExample'>Link video of lineup:</label><br>";
			echo 		"<input type='text' id='videoExample' name='videoExample'><br><br>";
			echo 		"<button id='submit'>Submit</button>";
			echo	"</form>";
			echo "</div>";
		}
	
		if(isset($_SESSION["usersUid"]) && $_SESSION["usersUid"] == "Admin") {
			echo "<div class = 'mapSelectorBox'>";
			echo 	"<a>Admin Has Been Logged in</a><br><br>";
			echo 	"<img src='images/Trollface.png' alt='Troll Face'>";
			echo    "<br>";
			echo    "<a href='admin.php'>View Link Requests</a>";
			echo "</div>";
		}
		?>

		<div class = "mapSelectorBox">
			<p>Approved Links</p>
			<?php	
				$requests =  listRequests($connection);
				foreach ($requests as $request) {
				 $url = $request['linksUrl'];
				 $id = $request['linksUserId'];
				 $name = getUserName($connection, $id);
					
				 // echo link if approved
				 if($request['approved'] == 1) {
				 	echo $request["linksName"] . ", " . "<a href=$url target='_blank'>$url<a/><br/>";
				 	echo "Posted by " . $name . "<br/>";
				 	echo "<br>";
				 }
				}  
			?>
		</div>
	</div>

	
	
</body>
<script src='js/jsFunctions.js'></script>
<?php
	if(isset($_SESSION["usersUid"])) {
		echo '<script> greet("' . $_SESSION['usersUid'] .'"); </script>';
	}
?>
</html>
