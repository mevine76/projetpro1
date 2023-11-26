<?php include_once 'templates/head.php'; ?>

<body class="">



<div class="container d-flex justify-content-around my-2 flex-wrap">
<?php for ($i=0; $i < count($quotes); $i++) { ?>


    <!-- Quotes Card -->
    <div class="card bg-warning" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$quotes[$i]["firstname"]?> <?=$quotes[$i]["lastname"]?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Email: <?=$quotes[$i]["email_address"]?> </li>
    <li class="list-group-item">Société: <?=$quotes[$i]["society"]?> </li>
    <li class="list-group-item">Adresse: <?=$quotes[$i]["mail_address"]?> </li>
    <li class="list-group-item">Téléphone: <?=$quotes[$i]["phone_number"]?> </li>
    <li class="list-group-item">Surface: <?=$quotes[$i]["surface"]?> </li>
    <li class="list-group-item">Date: <?= date_format(date_create($quotes[$i]["submission_date"]),'d-m-Y')?> </li>

  </ul>
  <p class="card-text text-center"><?=$quotes[$i]["work_description"]?></p>
  <div class="card-body text-center">
    <!-- Button for going to the update quote form -->
  <a type="button" href="controller_update_form.php?id=<?=$quotes[$i]["quote_id"]?>" class="btn btn-dark">Modifier</a>
  <!-- Button for opening the modal with the id of the quote -->
  <button type="button" class="btn btn-danger" data-fancybox data-src="#<?=$quotes[$i]["quote_id"]?>">
  Supprimer
</button>
  </div>
</div>


<!-- Modal with the id of the quote -->
<div id="<?=$quotes[$i]["quote_id"]?>" style="background-color:none;display:none;max-width:500px;" class="p-0 rounded-2">
<div class="card">
  <div class="card-header">
   Supprimer
  </div>
  <div class="card-body bg-warning">
    <h5 class="card-title">Voulez vous vraiment supprimer ce devis?</h5>
    <p class="card-text">Devis de: <?=$quotes[$i]["firstname"]?> <?=$quotes[$i]["lastname"]?></p>
    <span class="d-flex ">
    <form action="" method="post">
      <!-- button for deleting the quote -->
        <button name="delete" class="btn btn-danger mx-2" value="<?=$quotes[$i]["quote_id"]?>" type="submit">Supprimer</button>
    </form>
    <!-- Button to call the function to close the modal -->
    <button class="btn btn-dark" onclick="Fancybox.close()">Annulé</button></span>
  </div>
</div>
</div>


<?php } ?>

<!-- Shown if their is no quote -->
<?php if(count($quotes) == 0) { ?>

  <div class="container my-5 d-flex justify-content-center">

  
<p class="my-5">Aucun devis enregistré</p>
</div>
<?php } ?>

</div>


</body>

</html>
<script>
    Fancybox.bind("[data-fancybox]", {
        closeButton: false

});
</script>
<?php include_once 'templates/footer.php'; ?>