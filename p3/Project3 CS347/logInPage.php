<!-- This is our log in page that allows a user who already has 
an account to login and recieve a welcome message and contribute
lineups.
Creation Date: 3/28/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/Stylesheet.css">
	<title> Log In to Contribute </title>
</head>
<body>

<!-- Navigation bar for top of the page. -->
<ul class = "menuBar">
	<li class = "menu">
		<div class="menuButton">
			<a href = "index.php" class = "menuLink">Home</a>
		</div>
  	</li>
</ul>

<!-- Login page. -->
	<h1 class = "pageTitle" pageTitle>Log In!</h1>
		<p class = "pageDescription"> In order to contribute your lineups you must be a registered user.<br><br></p>
		
			
	<!--This is the login form along with some php scripts
    to make sure boxes are filled out.-->
	<div class = "signUpContainer">
    <div class = "mapSelectorBox">
            <h2>Please Fill out all the following Info!</h2>
			<form action="php/login.php" method="post">
				<input class = "userField" type="text" name="uid" placeholder="Username/Email..."><br><br>
				<input class = "passField" type="password" name="pwd" placeholder="Password..."><br><br>
				<button type="submit" name="submit">Submit</button>
			</form>
			<?php
				if(isset($_GET["error"])) {
					if ($_GET["error"] == "emptyInput") {
						echo "<p>All fields where not filled out.</p>";
						echo "<style> .userField {border: 3px solid red;} .passField {border: 3px solid red;}<style>";
					}
					if ($_GET["error"] == "noUser") {
						echo "<p>No user with this Username/Email exists.</p>";
						echo "<style> .userField {border: 3px solid red;}<style>";
					}
                    if ($_GET["error"] == "wrongPass") {
						echo "<p>Invalid Password.</p>";
                        echo "<a href='forgotPass.php'>If you would like to reset your password go here!</a>";
						echo "<style> .passField {border: 3px solid red;}<style>";
                        
					}
				}
			?>
		</div>
	</div>
	
</body>
<script src='js/jsFunctions.js'></script>
</html>