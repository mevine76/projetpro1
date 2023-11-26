<?php
session_start();
// Vérifier si l'administrateur est connecté
if (isset($_SESSION['admin_id'])) {
    header('Location: controller_home.php'); // Rediriger vers le formulaire de connexion
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Remplacez le mot de passe en texte brut par le hachage dans un environnement de production
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Vérifier les informations de connexion
    var_dump(password_verify($password, $hashedPassword));
    if ($username === 'admin' && password_verify($password, $hashedPassword)) {
        $_SESSION['admin_id'] = 1; // Enregistrez l'ID de l'admin en session
        header('Location: controller_home.php'); // Rediriger vers le formulaire admin
        exit();
    } else {
        $error = 'Identifiants invalides.';
    }
}



// Traitement du formulaire d'administration ici...
include '../views/connexion_form.php';
?>

<!-- Formulaire d'administration -->
<!-- Formulaire de connexion -->

