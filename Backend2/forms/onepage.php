<!DOCTYPE html>
<html>
<head>
	<title>Formulier verwerking</title>
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			// Gegevens zijn ingediend via het formulier, verwerk deze hier
			$naam = $_POST['naam'];
			$email = $_POST['email'];

			// Doe iets met de gegevens, bijvoorbeeld opslaan in een database
			// of verstuur een e-mail

			// Toon het resultaat aan de gebruiker
			echo "<h1>De ingevulde gegevens zijn:</h1>";
			echo "<p>Naam: " . $naam . "</p>";
			echo "<p>Emailadres: " . $email . "</p>";
		}
		else {
			// Toon het formulier aan de gebruiker
			echo '<h1>Vul hieronder uw gegevens in:</h1>';
			echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
			echo 'Naam: <input type="text" name="naam"><br>';
			echo 'Emailadres: <input type="email" name="email"><br>';
			echo '<input type="submit" value="Verzenden">';
			echo '</form>';
		}
	?>
</body>
</html>
