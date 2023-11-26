<?php include_once 'templates/head.php'; ?>
<?php include_once '../helpers/Database.php'; ?>

<!-- section desktop -->
<section class="bg-desktop-projects d-none d-sm-block p-5 vh-75">
    <div class="container">
        <h1 class="display-2 fw-semibold text-white mt-4"><span class="text-warning">Rénovation :</span> redéfinir votre espace, repenser votre vie.</h1>
        <p class="mt-5 text-white w-75"><span class="text-warning"></p>
    </div>
</section>

<!-- section mobile -->
<section class="bg-mobile-projects d-sm-none py-5 px-3 vh-50">
    <div class="container">
        <h1 class="display-5 fw-semibold text-white"><span class="text-warning">Rénovation :</span> redéfinir votre espace, repenser votre vie./h1>
        <p class="mt-5 text-white"></p>
    </div>
</section>

<!-- Ajout librairie JQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<ul class="nav nav-underline col-md-12 text-center">
    <li class="nav-item">
        <a class="nav-link text-black" href="#kitchens" data-target="kitchens">Cuisines</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-black" href="#bathrooms" data-target="bathrooms">Salles de bains</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-black" href="#bedrooms" data-target="bedrooms">Chambres</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-black" href="#living-rooms" data-target="living-rooms">Salons</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-black" href="#carpentries" data-target="carpentries">Menuiseries</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-black" href="#Couloirs" data-target="hallways">Couloirs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-black" href="#lighting" data-target="lighting">Eclairages</a>
    </li>
</ul>

<div class="image-container kitchens">
    <div class="row">
    <?php
        $category = "kitchens"; 
        $images = getImagesByCategory($category);

        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-2">';
            echo '<img src="../assets/img/uploads/' . $image['filename'] . '" class="img-fluid" alt="kitchen">';
            echo '</div>';
        }
        ?>
        
    </div>
</div>

<div class="image-container bathrooms">
    <div class="row">
    <?php
        $category = "bathrooms"; 
        $images = getImagesByCategory($category);

        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-2">';
            echo '<img src="../assets/img/uploads/' . $image['filename'] . '" class="img-fluid" alt="bathrooms">';
            echo '</div>';
        }
        ?>
        
    </div>
</div>

<div class="image-container bedrooms">
    <div class="row">
    <?php
        $category = "bedrooms"; 
        $images = getImagesByCategory($category);

        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-2">';
            echo '<img src="../assets/img/uploads/' . $image['filename'] . '" class="img-fluid" alt="bedroom">';
            echo '</div>';
        }
        ?>
        
    </div>
</div>

<div class="image-container living-rooms">
    <div class="row">
    <?php
        $category = "living-rooms"; 
        $images = getImagesByCategory($category);

        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-2">';
            echo '<img src="../assets/img/uploads/' . $image['filename'] . '" class="img-fluid" alt="living-room">';
            echo '</div>';
        }
        ?>
        
    </div>
</div>

<div class="image-container carpentries">
    <div class="row">
    <?php
        $category = "carpentries"; 
        $images = getImagesByCategory($category);

        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-2">';
            echo '<img src="../assets/img/uploads/' . $image['filename'] . '" class="img-fluid" alt="carpentry">';
            echo '</div>';
        }
        ?>
        
    </div>
</div>

<div class="image-container hallways">
    <div class="row">
    <?php
        $category = "hallways"; 
        $images = getImagesByCategory($category);

        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-2">';
            echo '<img src="../assets/img/uploads/' . $image['filename'] . '" class="img-fluid" alt="hallway">';
            echo '</div>';
        }
        ?>
        
    </div>
</div>

<div class="image-container lighting">
    <div class="row">
    <?php
        $category = "lighting"; 
        $images = getImagesByCategory($category);

        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-2">';
            echo '<img src="../assets/img/uploads/' . $image['filename'] . '" class="img-fluid" alt="lighting">';
            echo '</div>';
        }
        ?>
        
    </div>
</div>



<script>
    $(document).ready(function () {
        // Définis la catégorie par défaut
        var defaultCategory = "kitchens"; 
        // Récupère la catégorie par défaut à partir de l'URL
        var categoryFromUrl = window.location.hash.substr(1); // Supprime le # de l'URL
        var selectedCategory = categoryFromUrl || defaultCategory;
        // Masque toutes les images
        $(".image-container").hide();
        // Affiche les images de la catégorie sélectionnée
        $("." + selectedCategory).show();
        // Gère le changement de catégorie au clic sur un lien de navigation
        $(".nav-link").click(function () {
            var target = $(this).data("target");
            $(".image-container").hide();
            $("." + target).show();
        });
    });
</script>




<?php include_once 'templates/footer.php'; ?>