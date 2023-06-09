<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour09";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to retrieve student information for female students
    $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
    
    // Execute the query
    $stmt = $conn->query($sql);
    
    // Fetch all the rows from the result as an associative array
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Output the table HTML
    echo "<table>";
    
    // Output table header with field names
    echo "<thead>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Date de naissance</th>";
    echo "</tr>";
    echo "</thead>";
    
    // Output table rows with student data
    echo "<tbody>";
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>".$student['prenom']."</td>";
        echo "<td>".$student['nom']."</td>";
        echo "<td>".$student['naissance']."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    
    echo "</table>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
