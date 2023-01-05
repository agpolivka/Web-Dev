<!-- This is our page to help users create a new password
if they forgot theirs or want to change it.
Creation Date: 3/28/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/Stylesheet.css">
	<title> Sign Up to Contribute </title>
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

<!-- Sign up page. -->

	<h1 class = "pageTitle" pageTitle>Forgot Password? Enter info Below.</h1>
		<p class = "pageDescription"> Ideally this would send an email but since I don't know how to do that yet. For now providing correct account details will
            allow the user to reset the password.<br><br></p>
		
			
	<!--This is the Sign Up form along with some php scripts
    to make sure boxes are filled out.-->
	<div class = "signUpContainer">
    <div class = "signUpBox">
		    <!--Information boxes-->
            <h3>Please Fill out all the following Info!</h3>
			<form action="php/passReset.php" method="post">
				<input class = "nameField" type="text" name="name" placeholder="Full Name..."><br><br>
				<input class = "emailField" type="text" name="email" placeholder="Email..."><br><br>
				<input class = "ignField" type="text" name="ign" placeholder="In Game Name..."><br><br>
				<input class = "userField" type="text" name="uid" placeholder="Username..."><br><br>
				<input class = "passField" type="password" name="newPwd" placeholder="New Password..."><br><br>
				<input class = "passField" type="password" name="newPwdRepeat" placeholder="Repeat New Password..."><br><br>
				<button type="submit" name="submit">Submit</button>
			</form>
			<?php
			//validating input into the fields
				if(isset($_GET["error"])) {
					if ($_GET["error"] == "emptyInput") {
						echo "<p>All fields where not filled out.</p>";
						echo "<style> .userField {border: 3px solid red;} .emailField {border: 3px solid red;} .passField {border: 3px solid red;}
						.nameField {border: 3px solid red;} .ignField {border: 3px solid red;} <style>";
					}
					if ($_GET["error"] == "invalidUid") {
						echo "<p>Invalid Username.</p>";
						echo "<style> .userField {border: 3px solid red;}<style>";
					}
					if ($_GET["error"] == "invalidEmail") {
						echo "<p>Invalid Email.</p>";
						echo "<style> .emailField {border: 3px solid red;}<style>";
					}
					if ($_GET["error"] == "passDontMatch") {
						echo "<p>Passwords didn't match.</p>";
						echo "<style> .passField {border: 3px solid red;}<style>";
					}
					if ($_GET["error"] == "stmtFailed") {
						echo "<p>Something went wrong please try again.</p>";
					}
					if ($_GET["error"] == "passWeak") {
						echo "<p>Password is too weak.<br> Passwords need 1 uppercase, 1 number, and at least 6 characters long</p>";
						echo "<style> .passField {border: 3px solid red;}<style>";
					}
					if ($_GET["error"] == "none") {
						echo "<p>PASSWORD CHANGED!</p>";
					}
				}
			?>
		</div>
	</div>
	
</body>
</html>