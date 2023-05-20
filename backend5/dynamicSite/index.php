
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu</title>
</head>
<body>
    
<?php
// Stap 1: Databaseverbinding maken met PDO
$dsn = "mysql:host=localhost;dbname=database_php;charset=utf8mb4";
$username = "Ouassim";
$password = "test";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


// Stap 2: Het totale aantal characters ophalen
$queryCount = "SELECT COUNT(*) AS total FROM characters";
$stmtCount = $pdo->query($queryCount);
$totalCharacters = $stmtCount->fetchColumn();

// Stap 3: Alle characters uit de database halen en sorteren op naam
$queryCharacters = "SELECT * FROM characters ORDER BY name";
$stmtCharacters = $pdo->query($queryCharacters);
$characters = $stmtCharacters->fetchAll(PDO::FETCH_ASSOC);
?>
    <div class="container">
        <?php
        // Loop door de array en toon de gegevens van elk character
        foreach ($characters as $character) {
            echo "<div class='character-card'>";
            echo "<h2>{$character['name']}</h2>";
            echo "<img class='avatar' src='resources/images/{$character['avatar']}' alt='Avatar'>";
            // echo "<p><strong>Levenskracht:</strong> {$character['health']}</p>";
            // echo "<p><strong>bio:</strong> {$character['bio']}</p>";
            echo "<p><strong>Aanvalskracht:</strong> {$character['attack']}</p>";
            echo "<p><strong>Verdediging:</strong> {$character['defense']}</p>";
            echo "<p><strong>Kleur:</strong> {$character['color']}</p>";
            echo "<a class='button' href='characters.php?id={$character['id']}'>Meer details</a>";
            echo "</div>";
            // Stap 5: Toon het totale aantal characters
            echo "<p>Totaal aantal characters: {$totalCharacters}</p>";
        }
        ?>
    </div>

    <footer>
        <!-- Voeg je naam en de actuele datum toe -->
        &copy; Ouassim Mrabti <?php echo date('Y.m.d'); ?>
    </footer>
</body>
</html>









