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
        <?php
        // Retrieve and display data from internal API
        $cheeses = file_get_contents("http://internal_api/api.php?action=get");
        echo $cheeses;
        ?>
    </div>
</body>
</html>
