 <?php
//  session_start();
require_once ('bdd/config.php');

// // // Vérifier si l'utilisateur est connecté
// if (!isset($_SESSION['user']) || ($_SESSION['user']['role_id'] != 1 && $_SESSION['user']['role_id'] != 2)) {
//   header("Location: index.php");
//    exit;
//  }
//  include 'includes/config.php';

// // Désactiver la mise en cache
// header("Cache-Control: no-cache, must-revalidate");
// header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
$query = 'SELECT `first_name`, `last_name` FROM `user` WHERE `last_name` = "Jean" ';
$conn = $pdo->prepare($query);
$conn->execute();
$role_admin = $conn->fetchAll(PDO::FETCH_ASSOC);
?> 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap_override.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Employer </title>
    <link rel='icon' type="image/png" href="favicon.ico">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Employer</a>
            <!-- Ajoutez d'autres éléments de la barre de navigation si nécessaire -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="py-5">Bienvenue <?php foreach ($role_admin as $row) {
                                    echo 'Mr '.  $row['last_name'] . ' ' . $row['first_name'];
                                } ?></h1>


<section>
  <h2>Ajouter des voiture</h2>
  <form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label"">Titre</label>
        <input type=" text" name="title" id="title" class="form-control" value="">
  </div>
  <div class="mb-3">
    <label for="marque" class="form-label">Marque</label>
    <input name="marque" id="description" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Prix</label>
    <input name="prix" id="prix" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="kilometrage" class="form-label">Kilométrage</label>
    <input name="kilometrage" id="kilometrage" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Catégorie</label>
    <select name="category" id="category" class="form-select">
    <option selected="selected">Selectionner un model </option>
        <option>Berline</option>
        <option>Break</option>
        <option>Citadine</option>
        <option>SUV</option>


    </select>
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Image</label>
    <input type="file" name="file" id="file">
  </div>
  <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">


</form>   
</section>
<!-- Témoignages en attente, formulaire d'ajout de témoignage, formulaire d'ajout de véhicule -->
<div class="container">
  <div class="row">
  
    <div class="col">
      <div id="ajouter-temoignage">
        <form action="employ.php" class="card" method="POST">
          <h2>Ajouter un témoignage</h2>
          <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" placeholder="Nom" name="nom" required>
          </div>
          <div class="form-group">
            <label for="commentaire">Commentaire :</label>
            <textarea id="commentaire" placeholder="Commentaire" name="commentaire" required></textarea>
          </div>
          <div class="form-group">
            <label for="note">Note :</label>
            <div class="rating">
              <input type="radio" id="star5" name="note" value="5" />
              <label for="star5" title="5 étoiles"></label>
              <input type="radio" id="star4" name="note" value="4" />
              <label for="star4" title="4 étoiles"></label>
              <input type="radio" id="star3" name="note" value="3" />
              <label for="star3" title="3 étoiles"></label>
              <input type="radio" id="star2" name="note" value="2" />
              <label for="star2" title="2 étoiles"></label>
              <input type="radio" id="star1" name="note" value="1" />
              <label for="star1" title="1 étoile"></label>
            </div>
          </div>
          <br>
          <button type="submit" class="btn-valider">Ajouter</button>
          <button type="button" class="btn-refuser">Fermer</button>
        </form>
      </div>
    </div>
  
  </div>
</div>
</div> <!-- Fermeture de la balise <div class="container"> du contenu de la page -->
  
<?php include('templates/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>