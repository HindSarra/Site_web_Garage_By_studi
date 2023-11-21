<?php include ('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel='icon' type="image/png" href="../favicon.ico">

  <!-- Inclure les liens vers les fichiers CSS et JavaScript de Bootstrap ici si nécessaire -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/bootstrap_override.css">


</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="text-center mt-4">
          <h1 class="fs-5">Connectez-vous</h1>
        </div>
        <form action="login.php" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Adresse mail</label>
            <input type="email" name="email" class="form-control rounded-3" id="email" placeholder="name@example.com" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Mot de passe </label>
            <input type="password" name="password" class="form-control rounded-3" id="password" placeholder="Mot de passe " autocomplete="off">
          </div>
          <button class="w-100 btn btn-lg btn-primary rounded-3" type="submit" name="envoi">Connexion</button>

        </form>
        <button onclick="redirigerVersAccueil()" class="w-100 mt-2 btn btn-secondary btn-lg rounded-3">Fermé</button>

        <!-- Script JavaScript pour fermer la page -->
      
      </div>
    </div>
  </div>
  <script>
          function redirigerVersAccueil() {
            window.location.href = "../index.php"; // Redirige vers la page d'accueil
          }
        </script>
  <!-- Inclure les fichiers JavaScript de Bootstrap ici si nécessaire-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>