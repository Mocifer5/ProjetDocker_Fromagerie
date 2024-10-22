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

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add') {
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $sql = "INSERT INTO fromages (nom, prix) VALUES ('$nom', '$prix')";
        if ($conn->query($sql) === TRUE) {
            echo "Nouveau fromage ajouté avec succès!";
        } else {
            echo "Erreur lors de l'ajout du fromage.";
        }
    } elseif ($_POST['action'] === 'delete') {
        $id = $_POST['id'];
        $sql = "DELETE FROM fromages WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Fromage supprimé avec succès!";
        } else {
            echo "Erreur lors de la suppression du fromage.";
        }
    }
} elseif ($_GET['action'] === 'get') {
    // Retrieve and display data
    $sql = "SELECT id, nom, prix FROM fromages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<ul>';
        while($row = $result->fetch_assoc()) {
            echo '<li>' . $row["nom"] . " : " . $row["prix"] . " EUR ";
            echo '<form method="POST" action="" style="display:inline;">
                    <input type="hidden" name="id_to_delete" value="' . $row["id"] . '">
                    <input type="submit" name="delete" value="Supprimer">
                  </form>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo "0 résultats";
    }
}

$conn->close();
?>
