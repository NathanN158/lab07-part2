<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rohirrim Booking Confirmation</title>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Booking Confirmation" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
	<link rel="stylesheet" type="text/css" href="style/style.css" >
	<link rel="stylesheet" type="text/css" href="style/register.css" >	
</head>
<body>
	<h1>Rohirrim Tour Booking Confirmation</h1>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Collect and sanitize form data
		$firstname = htmlspecialchars($_POST["firstname"] ?? "Not provided");
		$lastname = htmlspecialchars($_POST["lastname"] ?? "Not provided");
		$age = htmlspecialchars($_POST["age"] ?? "Not provided");
		$food = htmlspecialchars($_POST["food"] ?? "None");
		$partysize = htmlspecialchars($_POST["partysize"] ?? "Not specified");
		$bookday = htmlspecialchars($_POST["bookday"] ?? "Not specified");

		// Species radio buttons
		$speciesMap = ["M" => "Human", "D" => "Dwarf", "E" => "Elf", "H" => "Hobbit"];
		$speciesCode = $_POST["species"] ?? "Unknown";
		$species = $speciesMap[$speciesCode] ?? "Unknown";

		// Booking checkboxes
		$bookings = [];
		if (isset($_POST["accom"])) $bookings[] = "Accommodation";
		if (isset($_POST["4day"])) $bookings[] = "4-Day Tour";
		if (isset($_POST["10day"])) $bookings[] = "10-Day Tour";

		$tourSummary = count($bookings) > 0 ? implode(", ", $bookings) : "No tours selected";

		// Output confirmation
		echo "<h2>Booking Details</h2>";
		echo "<p><strong>Name:</strong> $firstname $lastname</p>";
		echo "<p><strong>Age:</strong> $age</p>";
		echo "<p><strong>Species:</strong> $species</p>";
		echo "<p><strong>Group Size:</strong> $partysize</p>";
		echo "<p><strong>Preferred Date:</strong> $bookday</p>";
		echo "<p><strong>Selected Options:</strong> $tourSummary</p>";
		echo "<p><strong>Food Preference:</strong> $food</p>";

		echo "<p>Thank you for booking with the Rohirrim Dude Ranch! We’ll see you in the Riddermark.</p>";
	} else {
		echo "<p>Error: Please submit the form from the <a href=\"register.html\">booking page</a>.</p>";
	}
?>
</body>
</html>
