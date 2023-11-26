<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location: controller_home.php'); // Rediriger vers le formulaire de connexion
?>
