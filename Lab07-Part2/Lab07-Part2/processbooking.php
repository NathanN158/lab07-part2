<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rohirrim Booking Confirmation</title>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Booking Confirmation" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
    <title>Booking Confirmation</title>
    <!-- Place the general style sheet before specific CSS so the specific overides the general formatting-->
	<link rel="stylesheet" type="text/css" href="style/style.css" >
	<link rel="stylesheet" type="text/css" href="style/register.css" >	
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php 
        if (isset ($_POST["firstname"])) {
            $firstname = $_POST["firstname"];
            echo "<p> This is a test: Your first name is $firstname </p>";
        }
        else {
            echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
        }
        if (isset ($_POST["lastname"])) {
            $firstname = $_POST["lastname"];
            echo "<p> This is a test: Your first name is $lastname </p>";
        }
        else {
            echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
        }
        if (isset ($_POST["age"])) {
            $firstname = $_POST["age"];
            echo "<p> This is a test: Your first name is $age </p>";
        }
        else {
            echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
        }
        if (isset ($_POST["food"])) {
            $firstname = $_POST["food"];
            echo "<p> This is a test: Your first name is $food </p>";
        }
        else {
            echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
        }
        if (isset ($_POST["partySize"])) {
            $firstname = $_POST["partySize"];
            echo "<p> This is a test: Your first name is $partySize </p>";
        }
        else {
            echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
        }
    ?>
</body>