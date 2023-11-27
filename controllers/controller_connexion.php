<?php
session_start();
// Vérifie si l'administrateur est connecté
if (isset($_SESSION['admin_id'])) {
    header('Location: controller_home.php'); // Rediriger vers le formulaire de connexion
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Récupère le mot de passe haché depuis la base de données (remplacez ceci par votre logique)
    $storedHashedPassword = '$2y$10$dS7Z1cq1lm52fJXpR7EtSuCB5Gk9sbjbQVqH5TH6Sb.SnHoJpN3zC'; // Remplacez cette valeur par le véritable hachage stocké.

    // Vérifie les informations de connexion
    if (password_verify($password, $storedHashedPassword)) {
        $_SESSION['admin_id'] = 1; // Enregistre l'ID de l'admin en session
        header('Location: controller_home.php'); // Redirige vers le formulaire admin
        exit();
    } else {
        $error = 'Identifiants invalides.';
    }
}

include '../views/connexion_form.php';



