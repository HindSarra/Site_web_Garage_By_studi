<?php require_once('./templates/header.php'); ?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <h1>Liste des voitures en vente</h1>
</div>
<?php include('lib/filtre.php');
$car=getCars($pdo); ?>
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <img src="assets/uploads/pic-1-home.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">TITRE DE LA VOITURES</h5>
        <p class="card-text"> <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
              <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
            </svg><?= $car['brand']; ?></span><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
              <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
            </svg><?= $car['year']; ?></span><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
              <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
            </svg><?=$car['distance'] ?> Km</span></p>
        <div class="card-bottum"><?= $car['brand'] ?> €</div>
      </div>
    </div>
  </div>
</div>
<div class="result"></div>
<?php require_once('./templates/footer.php'); ?>
