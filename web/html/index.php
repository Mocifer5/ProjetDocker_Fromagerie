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
        
        <!-- Form to Add New Cheese -->
        <form method="POST" action="">
            <label for="nom">Nom du Fromage:</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="prix">Prix (EUR):</label>
            <input type="number" step="0.01" id="prix" name="prix" required>
            
            <input type="submit" name="add" value="Ajouter Fromage">
        </form>

        <?php
        // Handle form submissions
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["add"])) {
                $data = [
                    "action" => "add",
                    "nom" => $_POST["nom"],
                    "prix" => $_POST["prix"]
                ];
                $options = [
                    "http" => [
                        "header" => "Content-Type: application/x-www-form-urlencoded\r\n",
                        "method" => "POST",
                        "content" => http_build_query($data),
                    ]
                ];
                $context = stream_context_create($options);
                $response = file_get_contents("http://internal_api/api.php", false, $context);
                echo $response;
            }

            if (isset($_POST["delete"])) {
                $data = [
                    "action" => "delete",
                    "id" => $_POST["id_to_delete"]
                ];
                $options = [
                    "http" => [
                        "header" => "Content-Type: application/x-www-form-urlencoded\r\n",
                        "method" => "POST",
                        "content" => http_build_query($data),
                    ]
                ];
                $context = stream_context_create($options);
                $response = file_get_contents("http://internal_api/api.php", false, $context);
                echo $response;
            }
        }

        // Retrieve and display data from internal API
        $cheeses = file_get_contents("http://internal_api/api.php?action=get");
        echo $cheeses;
        ?>
    </div>
</body>
</html>
