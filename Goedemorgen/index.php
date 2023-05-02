<!DOCTYPE html>
<html>
<head>
	<title>dynamic time app</title>
	<style>
		body {
			background-size: cover;
			background-position: center;
		}

		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
			text-align: center;
			color: #fff;
			text-shadow: 1px 1px 1px #000;
		}

		h1 {
			font-size: 5em;
		}

		p {
			font-size: 3em;
			margin-top: 0;
		}
	</style>
</head>
<body>
	<?php
		$hour = date('H');
		$greeting = '';
		$background = '';

		if ($hour >= 6 && $hour < 12) {
			$greeting = 'Goedemorgen';
			$background = 'morning.png';
		} elseif ($hour >= 12 && $hour < 18) {
			$greeting = 'Goedemiddag';
			$background = 'afternoon.png';
		} elseif ($hour >= 18 || $hour < 6) {
			$greeting = 'Goedeavond';
			$background = 'evening.png';
		} else {
			$greeting = 'Goedenacht';
			$background = 'night.png';
		}

		echo '<div class="container" style="background-image: url(' . $background . ');">';
		echo '<h1>' . $greeting . '</h1>';
		echo '<p>Het is nu ' . date('H:i') . '</p>';
		echo '</div>';
	?>
</body>
</html>
