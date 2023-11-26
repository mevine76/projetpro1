<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sbtr";

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}


function getImagesByCategory($category)
{
    global $db; // Utilise la connexion à la base de données définie dans ce fichier
    
    $sql = "SELECT filename FROM images WHERE category = :category";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
