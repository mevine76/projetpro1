<?php include_once 'templates/head.php'; ?>
<form action="../controllers/controller_upload_form.php" method="post" enctype="multipart/form-data">
    <label for="image">Sélectionnez une image :</label>
    <input type="file" name="images[]" id="images" accept="image/*" multiple>
    
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


<?php include_once 'templates/footer.php'; ?>