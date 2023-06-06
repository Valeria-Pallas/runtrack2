<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour09";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to calculate the average capacity of the salles
    $sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";

    // Execute the query
    $stmt = $conn->query($sql);

    // Fetch the result as an associative array
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Output the table HTML
    echo "<table>";

    // Output table header with field name
    echo "<thead>";
    echo "<tr>";
    echo "<th>Capacité Moyenne</th>";
    echo "</tr>";
    echo "</thead>";

    // Output table row with the data
    echo "<tbody>";
    echo "<tr>";
    echo "<td>".$result['capacite_moyenne']."</td>";
    echo "</tr>";
    echo "</tbody>";

    echo "</table>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    En utilisant PHP, connectez-vous à la base de données “jour09”. À l’aide d’une requête
SQL, sélectionnez la capacité moyenne des salles. Affichez le résultat de cette requête
dans un tableau HTML. La première ligne de votre tableau HTML doit contenir le nom
des champs. Les suivantes doivent contenir les données présentes dans votre base de
données.
    </p>
</body>
</html>