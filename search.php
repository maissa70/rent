<?php
$host = 'localhost'; 
$dbname = 'mabase'; // Nom de la base de données corrigé
$username = 'root'; // Identifiant de connexion
$password = '';     // Mot de passe vide (si applicable)

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer les erreurs PDO
    echo "Connected to database";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

