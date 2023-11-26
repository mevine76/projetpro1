<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Société Bâtilent travaux Rénovation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/bb2d177e58.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>

  <script src="../assets/js/script.js"></script>
  <link rel=”icon” href=”favicon.ico” type=”image/x-icon”>
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

  <!-- en tête -->
  <header>
    <nav class="navbar navbar-expand-lg bg-dark bg-gradient navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/logo.png" alt="Logo SBTR">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="controller_home.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controller_society.php">La société</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controller_projects.php">Projets réalisés</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controller_quote_form.php">Demande devis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controller_contact.php">Contact</a>
            </li>
            <?php if (isset($_SESSION['admin_id'])){ ?>
              <li class="nav-item">
              <a class="nav-link text-danger" href="controller_manage_quote_form.php">Devis</a>
            </li>
            <?php } ?>
            <?php if (isset($_SESSION['admin_id'])){ ?>
              <li class="nav-item">
              <a class="nav-link text-white" href="controller_upload_form.php">Images</a>
            </li>
            <?php } ?>
            <?php if (isset($_SESSION['admin_id'])){ ?>
              <li class="nav-item">
              <a class="nav-link text-success" href="controller_disconnect.php">Déco</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="https://fr-fr.facebook.com/"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  