<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Fromages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Liste des Fromages</h1>
        
        <!-- Form to search for a specific cheese by name -->
        <form method="GET" action="">
            <label for="nom">Nom du Fromage :</label>
            <input type="text" id="nom" name="nom">
            <input type="submit" value="Rechercher">
        </form>

        <?php
        // Retrieve and display data from internal API based on user search input
        if (isset($_GET['nom'])) {
            $nom = urlencode($_GET['nom']);
            $cheeses = file_get_contents("http://internal_api/api.php?nom=" . $nom);
        } else {
            // Default action to list all cheeses
            $cheeses = file_get_contents("http://internal_api/api.php?action=get");
        }
        echo $cheeses;
        ?>
    </div>
</body>
</html>
