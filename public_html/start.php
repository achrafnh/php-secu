<?php
// Informations de connexion à la base de données
$host = 'mysql';
$user = 'root';
$pass = 'root';

$connexion = new mysqli($host, $user, $pass,"dbtest");



// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Script SQL à exécuter
$script_sql = "

-- Création de la table 'posts'
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    body TEXT NOT NULL
);




-- Création de la table 'posts'
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    content VARCHAR(255) NOT NULL
);

INSERT INTO posts (title, content) VALUES
    ('post1', 'Informations post1'),
    ('post2', 'Informations post2'),
    ('post3', 'Informations post3');

-- Insertion de données fictives dans la table 'utilisateurs'
INSERT INTO posts (nom_utilisateur, mot_de_passe) VALUES
    ('post1', 'Informations post1'),
    ('post2', 'Informations post2'),
    ('post3', 'Informations post3');


-- Création de la table 'utilisateurs'
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

-- Insertion de données fictives dans la table 'utilisateurs'
INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe) VALUES
    ('utilisateur1', 'motdepasse1'),
    ('utilisateur2', 'motdepasse2'),
    ('utilisateur3', 'motdepasse3');
";

// Exécution du script SQL
if ($connexion->multi_query($script_sql)) {
    do {
        // Récupération des résultats (peut être vide)
        if ($resultat = $connexion->store_result()) {
            $resultat->free();
        }
    } while ($connexion->next_result());
    echo "Le script SQL a été exécuté avec succès.";
} else {
    echo "Erreur lors de l'exécution du script SQL : " . $connexion->error;
}

// Fermeture de la connexion
$connexion->close();
?>
