<?php
session_start();

// Vérifier si l'administrateur est connecté
if (!isset($_SESSION['admin_id'])) {
    header('Location: controller_home.php'); // Rediriger vers la page de connexion
    exit();
}
?>

<!-- Formulaire d'administration -->
<h1>Bienvenue, Admin!</h1>

<!-- Ajoutez ici votre formulaire pour ajouter/supprimer une image dans la BDD -->
<form action="../controllers/controller_admin_form.php" method="post" enctype="multipart/form-data">
    <label for="image">Sélectionnez une image :</label>
    <input type="file" name="image" id="image" accept="image/*">
    
    <label for="category">Choisissez la catégorie :</label>
    <select name="category" id="category">
        <option value="kitchens">Cuisines</option>
        <option value="bathrooms">Salles de bains</option>
        <option value="bedrooms">Chambres</option>
        <option value="living-rooms">Salons</option>
        <option value="carpentries">Menuiseries</option>
        <option value="hallways">Couloirs</option>
        <option value="lighting">Eclairages</option>
    </select>
    <input type="hidden" name="upload" value="upload">
    <input type="submit" value="Ajouter l'image">
</form>