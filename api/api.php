<?php
$servername = "mysql_db";
$username = "fromage_user";
$password = "fromage_password";
$dbname = "fromage_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'nom' is provided as a GET parameter (vulnerable to SQL injection)
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];  // No sanitization here, making it vulnerable
    $sql = "SELECT id, nom, prix FROM fromages WHERE nom = '$nom'";
} else {
    // Default action to list all fromages
    $sql = "SELECT id, nom, prix FROM fromages";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<ul>';
    while($row = $result->fetch_assoc()) {
        echo '<li>' . $row["nom"] . " : " . $row["prix"] . " EUR ";
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo "0 résultats";
}

$conn->close();
?>
