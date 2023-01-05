/*This is our JavaScript file that holds functions to
help deal with some dynamic features of the website.
Creation Date: 3/28/2022
Author Name: Alex Polivka, Devon Boldt, Mason Marker, Tate Lemm
*/

const greeting = document.getElementById('greeting');

//function to greet signed in user based on the time
function greet(username) {
    let time = new Date(),
        hours = time.getHours();
  
    if (hours < 12) {
        greeting.textContent = "Good Morning " + username + "!";
    } else if (hours < 18) {
        greeting.textContent = "Good Afternoon " + username + "!";
    } else {
        greeting.textContent = "Good Evening " + username + "!";
    }
}

//function to deal with menu toggling
function myFunction() {
    document.getElementById("menuDropdown").classList.toggle("show");
}


// Regex function used from w3 schools
function regex() {
	//variables to test the password validity
	var password = document.getElementById("psw");
	var testLetter = document.getElementById("letter");
	var testCapital = document.getElementById("capital");
	var testNumber = document.getElementById("number");
	var testLength = document.getElementById("length");

	password.onfocus = function() {
		document.getElementById("message").style.display = "block";
	}

	password.onblur = function() {
		document.getElementById("message").style.display = "none";
	}

	password.onkeyup = function() {
		// Validate lowercase letters
		var lowerCaseLetters = /[a-z]/g;
		if (myInput.value.match(lowerCaseLetters)) {
			letter.classList.remove("invalid");
			letter.classList.add("valid");
		} else {
			letter.classList.remove("valid");
			letter.classList.add("invalid");
		}

		// Validate capital letters
		var upperCaseLetters = /[A-Z]/g;
		if (password.value.match(upperCaseLetters)) {
			testCapital.classList.remove("invalid");
			testCapital.classList.add("valid");
		} else {
			testCapital.classList.remove("valid");
			testCapital.classList.add("invalid");
		}

		// Validate numbers
		var testNumbers = /[0-9]/g;
		if (password.value.match(numbers)) {
			testNumbers.classList.remove("invalid");
			testNumbers.classList.add("valid");
		} else {
			testNumbers.classList.remove("valid");
			testNumbers.classList.add("invalid");
		}

		// Validate length
		if (password.value.length >= 8) {
			testLength.classList.remove("invalid");
			testLength.classList.add("valid");
		} else {
			testLength.classList.remove("valid");
			testLength.classList.add("invalid");
		}
	}
}

//function to deal with menu drop down options
window.onclick = function(event) {
    if (!event.target.matches('.menuButton')) {
        var dropdowns = document.getElementsByClassName("navOptions");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}