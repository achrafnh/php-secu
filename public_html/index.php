<h1>Injection SQL</h1>

<?php
$host = 'mysql';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="POST" action="authentification.php">
        <label for="nom_utilisateur">Nom d'utilisateur :</label>
        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required><br><br>
        
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
        
        <input type="submit" value="Se Connecter">
    </form>
</body>
</html>
