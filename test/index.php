<?php
$servername = "mysql";
$username = "root";
$password = "root";
$database = "mydb";

// Créez une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données !";
    // Vous pouvez exécuter des requêtes SQL ici
}

// N'oubliez pas de fermer la connexion lorsque vous avez terminé
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page d'Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ma Page d'Accueil</h1>
    </header>
    <div class="container">
        <h2>Bienvenue sur ma page d'accueil !</h2>
        <p>Ceci est un exemple de page d'accueil statique avec un peu de style CSS.</p>
        <p>N'hésitez pas à personnaliser cette page selon vos besoins.</p>
    </div>
</body>
</html>
