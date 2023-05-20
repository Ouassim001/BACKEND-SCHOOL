<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<body>

	<?php
		// loop through 10 times
		for($i = 1; $i <= 10; $i++) {
	?>

		<div>
			<img src="matrix.png"<?php echo $i; ?> alt="Image <?php echo $i; ?>">
			<p>Some text for image <?php echo $i; ?></p>
		</div>

	<?php
		}
	?>

</body>
</html>
