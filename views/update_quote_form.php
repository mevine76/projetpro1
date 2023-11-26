<?php include_once 'templates/head.php'; ?>

<!-- section desktop -->
<section class="bg-desktop-quote d-none d-sm-block p-5 vh-100">
  <div class="container">
    <h1 class="display-2 fw-semibold text-white mt-4">La <span class="text-warning">rénovation</span> sur mesure prend tout son sens</h1>
    <p class="mt-5 text-white w-75"><span class="text-warning"></p>
  </div>
</section>

<!-- section mobile -->
<section class="bg-mobile-quote d-sm-none py-5 px-3 vh-50">
  <div class="container">
    <h1 class="display-5 fw-semibold text-white">Notre entreprise de <span class="text-warning">rénovation</span> tous corps d'état</h1>
    <p class="mt-5 text-white"></p>
  </div>
</section>
<section class=" bg-warning bg-gradient">

  <div class="devis">


    <div class="container">

      <h2 class="display-3 fw-bold">Demande de devis</h2>

      <div class="mb-3">
        <form action="" method="POST">

          <div class="row mb-3">
            <div class="col">
              <input type="text" name="lastname" class="form-control" value="<?=$quote["lastname"] ?>" placeholder="<?= $errors["lastname"] ?? "Nom" ?>" aria-label="lastname" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ-]+">
            </div><br>
            <div class="col">
              <input type="text" name="firstname" class="form-control" value="<?=$quote["firstname"] ?>" placeholder="<?= $errors["firstname"] ?? "Prénom" ?>" aria-label="firstname" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ-]+">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <input type="text" name="society" class="form-control" value="<?=$quote["society"] ?>" placeholder="Société" aria-label="Société" required pattern="[A-Za-z0-9\s]+">
            </div>

            <div class="col">
              <input type="text" name="phone_number" class="form-control" value="<?=$quote["phone_number"] ?>" placeholder="Telephone" aria-label="Tel" required pattern="\d{10}">
            </div>
          </div> 
          <div class="row mb-3">
            <div class="col">
              <input type="text" name="mail_address" class="form-control" value="<?=$quote["mail_address"] ?>" placeholder="Adressse" aria-label="Address" required >
            </div>

            <div class="col">
              <input type="text" name="surface" class="form-control" value="<?=$quote["surface"] ?>" placeholder="Surface du bien" aria-label="Surface" required pattern="\d+(\.\d{1,2})?">
            </div>
          </div>


          <div class="row mb-3">
            <label for="FormControlTextarea1" class="form-label"></label>
            <input type="text" name="email_address" class="form-control" value="<?=$quote["email_address"] ?>" placeholder="email" aria-label="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">


            <label for="FormControlTextarea1" class="form-label mt-4"></label>
            <textarea name="work_description" value="<?=$quote["work_description"] ?>" class="form-control" id="FormControlTextarea1" rows="3"></textarea>
          </div>
      </div>
      <div class="d-flex justify-content-center py-3">
        <input type="hidden" name="action" value="submit_quote">
        <button type="submit" class="button rounded">Confirmer la demande</button>
        <!-- <a href="controllers/controller-confirmation.php" type="submit" class="bouton">Confirm identity</a> -->
      </div>
      </form>

    </div>

  </div>
</section>







<?php include_once 'templates/footer.php'; ?>