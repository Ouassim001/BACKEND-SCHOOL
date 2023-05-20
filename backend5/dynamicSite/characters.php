<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Character Details</title>
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

    // Stap 2: Het ID van het character ophalen uit de URL
    $characterId = $_GET['id'];

    // Stap 3: Het specifieke character uit de database halen op basis van het ID
    $queryCharacter = "SELECT * FROM characters WHERE id = :id";
    $stmtCharacter = $pdo->prepare($queryCharacter);
    $stmtCharacter->execute(['id' => $characterId]);
    $character = $stmtCharacter->fetch(PDO::FETCH_ASSOC);

    // Stap 4: Toon de gegevens van het character
    if ($character) {
        echo "<h2>{$character['name']}</h2>";
        echo "<img class='avatar' src='resources/images/{$character['avatar']}' alt='Avatar'>";
        echo "<p><strong>Levenskracht:</strong> {$character['health']}</p>";
        echo "<p><strong>bio:</strong> {$character['bio']}</p>";
        echo "<p><strong>Aanvalskracht:</strong> {$character['attack']}</p>";
        echo "<p><strong>Verdediging:</strong> {$character['defense']}</p>";
        echo "<p><strong>Kleur:</strong> {$character['color']}</p>";
    } else {
        echo "Character not found.";
    }
    ?>

    <footer>
        &copy; Ouassim Mrabti <?php echo date('Y.m.d'); ?>
    </footer>
</body>
</html>
