<?php
session_start();

// Vérifier si l'administrateur est connecté
if (!isset($_SESSION['admin_id'])) {
    header('Location: controller_home.php'); // Rediriger vers le formulaire de connexion
    exit();
}

include_once '../models/Upload.php';
require_once '../views/upload_form.php';
require "../helpers/Database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload']) && $_POST['upload'] === 'upload') {
    if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
        $uploadDirectory = '../assets/img/uploads/';
        $category = $_POST['category'];

        // Boucle à travers chaque fichier téléchargé
        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $filename = $_FILES['images']['name'][$i];
            $tempPath = $_FILES['images']['tmp_name'][$i];
            $targetPath = $uploadDirectory . $filename;

            if (move_uploaded_file($tempPath, $targetPath)) {
                $inserted = insertImage($filename, $category);
                if ($inserted) {
                    echo "L'image $filename a été téléchargée avec succès et ajoutée à la base de données.<br>";
                } else {
                    echo "Erreur lors de l'ajout de l'image $filename à la base de données.<br>";
                }
            } else {
                echo "Erreur lors du téléchargement du fichier $filename.<br>";
            }
        }
    } else {
        echo "Aucun fichier n'a été téléchargé.";
    }
}
?>


