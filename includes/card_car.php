<div class="col-md-4 mb-4">
  <div class="card">
    <img src="<?= getCarImage($car['image']); ?>" class="card-img-top" alt="<?= $car['title']; ?>" width="700" height="500" loading="lazy">
    <div class="card-body">
      <h5 class="card-title"><?= $car['title'] ?></h5>
      <p class="card-text"> <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
          </svg><?= $car['brand']; ?></span><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
          </svg><?= $car['year']; ?></span><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
          </svg><?= $car['distance'] ?> Km</span></p>
      <div class="card-bottum"><?= $car['price'] ?> €</div>
    </div>
  </div>
</div>