<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
	<?php include 'includes/header.php' ?>


	

    


	<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->
    <?php
    // Voeg hier de code toe om gegevens uit de database op te halen en weer te geven
    
    $host = 'localhost'; // Hostnaam van de database-server
    $username = 'Ouassim'; // Gebruikersnaam voor toegang tot de database
    $password = 'test'; // Wachtwoord voor toegang tot de database
    $database = 'database_php'; // Naam van de database
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    if (!$conn) {
        die("Kan geen verbinding maken met de database: " . mysqli_connect_error());
    }
    
    
    
    $query = "SELECT * FROM onderwerpen";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Fout bij het uitvoeren van de query: " . mysqli_error($conn));
    }
    
    // Verwerk de resultaten
    while ($row = mysqli_fetch_assoc($result)) {
        // Doe iets met de gegevens, bijvoorbeeld toon ze op de pagina
        echo $row['name'];
        echo '<br>';

        echo $row['description'];
        echo '<br>';

        echo $row['image'];
        echo '<br>';
        
    }
    
    // Sluit de databaseverbinding
    mysqli_close($conn);
    ?>

    
    
    




	








	<!-- laad hier via php je footer in (vanuit je includes map)-->
	<?php include 'includes/footer.php' ?>




</body>
</html>