<?php
require_once('bdd/config.php');
require_once('includes/nav_bar.php');
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Garage automobile Vincent PAROT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap_override.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/image/logo_horizontal.png" alt="Logo garage-auto" width="250">
      </a>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">

        <?php foreach ($mainMenu as $key => $value) { ?>
          <li class="nav-item">
            <a href="<?= $key; ?>" class="nav-link <?php if ($currentPage === $key) {
                                                      echo 'active';
                                                    } ?>"><?= $value; ?></a>
          </li>
        <?php } ?>
      </ul>
      <div class="col-md-2 text-end">
        <button type="button" class="btn btn-primary">Se connecter</button>
      </div>
    </header>