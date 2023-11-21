<div class="col-md-4 mb-4">
  <div class="card">
    <img src="<?= getCarImage($car['image']); ?>" class="card-img-top" alt="<?= $car['title']; ?>" width="700" height="500" loading="lazy">
    <div class="card-body">
      <h5 class="card-title"><?= $car['title'] ?></h5>

      <div class="card-text"> 
        <span class="data-brand"><?= $car['brand']; ?>/</span>
         <span class="data-year"><?= $car['year']; ?>/</span> 
           <span class="data-distance" ><?= $car['distance'] ?> Km/</span>
          <span class="data-modele" ><?= $car['modele'] ?></span>
</div> 
      <div class="card-bottum data-price"><?= $car['price'] ?> €</div>
    </div>
  </div>
</div>