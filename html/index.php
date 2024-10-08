<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Inclure le fichier CSS -->
    <title>Liste des Fromages</title>
</head>
<body>
    <div class="container"> <!-- Utilisation d'une div pour le style -->
        <?php
        $servername = "mysql";
        $username = "fromage_user";
        $password = "fromage_password";
        $dbname = "fromage_db";

        // Créer une connexion à MySQL
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }

        $sql = "SELECT nom, prix FROM fromages";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h1>Liste des Fromages</h1>";
            while($row = $result->fetch_assoc()) {
                echo   $row["nom"]. "      : " . $row["prix"]. " EUR<br>";
            }
        } else { 
            echo "0 résultats";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
