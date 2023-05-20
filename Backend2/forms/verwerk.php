<!-- verwerk.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Verwerking gegevens</title>
</head>
<body>
	<?php
	if (isset($_REQUEST['naam']) && isset($_REQUEST['email'])) {
		$naam = $_REQUEST['naam'];
		$email = $_REQUEST['email'];
		echo "<h1>De ingevulde gegevens zijn:</h1>";
		echo "<p>Naam: " . $naam . "</p>";
		echo "<p>E-mailadres: " . $email . "</p>";
	} else {
		echo "<h1>Geen gegevens ontvangen</h1>";
	}
	?>
</body>
</html>
