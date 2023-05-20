<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultaat</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $naam = $_POST["naam"];
    $land = $_POST["land"];
    $persoon = $_POST["persoon"];
    $werkwoord = $_POST["werkwoord"];
    $speelgoed = $_POST["speelgoed"];
    $bijzonderheid = $_POST["bijzonderheid"];

    $grappigeTekst = "Er heerst paniek in {$land}! {$naam} heeft een {$bijzonderheid} en heeft dringend hulp nodig. Wie kan helpen? {$naam} heeft een {$persoon} nodig die goed is in {$werkwoord} en die graag speelt met {$speelgoed}.";

    echo "<h1>Resultaat</h1>";
    echo "<p>{$grappigeTekst}</p>";
}
?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultaat</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $naam = $_POST["naam"];
        $land = $_POST["land"];
        $persoon = $_POST["persoon"];
        $werkwoord = $_POST["werkwoord"];
        $speelgoed = $_POST["speelgoed"];
        $bijzonderheid = $_POST["bijzonderheid"];

        $grappigeTekst = "Er heerst paniek in {$land}! {$naam} heeft een {$bijzonderheid} en heeft dringend hulp nodig. Wie kan helpen? {$naam} heeft een {$persoon} nodig die goed is in {$werkwoord} en die graag speelt met {$speelgoed}.";

        echo "<div class='container'>";
        echo "<h1>Resultaat</h1>";
        echo "<p><strong>Naam:</strong> {$naam}</p>";
        echo "<p><strong>Land:</strong> {$land}</p>";
        echo "<p><strong>Persoon:</strong> {$persoon}</p>";
        echo "<p><strong>Werkwoord:</strong> {$werkwoord}</p>";
        echo "<p><strong>Speelgoed:</strong> {$speelgoed}</p>";
        echo "<p><strong>Bijzonderheid:</strong> {$bijzonderheid}</p>";
        echo "<p>{$grappigeTekst}</p>";
        echo "</div>";
    }
    ?>
    <footer>
        &copy; Ouassim Mrabti <?php echo date('Y.m.d'); ?>
    </footer>
</body>
</html>
