<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données avec MySQLi
    $host = 'mysql';
    $user = 'root';
    $pass = 'root';
    
    $mysqli = new mysqli($host, $user, $pass,"dbtest");

    // Vérification de la connexion
    if ($mysqli->connect_error) {
        die("Échec de la connexion à la base de données : " . $mysqli->connect_error);
    }

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Échec de la connexion à la base de données : " . $mysqli->connect_error);
}

// Récupération des entrées utilisateur (non sécurisées)
$nom_utilisateur = $_POST['nom_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];

// Construction de la requête SQL (vulnérable à l'injection SQL)
$sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = '$nom_utilisateur' AND mot_de_passe = '$mot_de_passe'";




$resultat = $mysqli->query($sql);

// Vérification de l'authentification
if ($resultat->num_rows > 0) {
    echo "Connexion réussie!";
} else {
    echo "Échec de la connexion!";
}

// Fermeture de la connexion
$mysqli->close();

}





?>
