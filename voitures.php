<?php require_once('./templates/header.php');
require_once('./includes/function/function_get_image.php');
require_once('./includes/function/function_get_car.php'); ?>
<?php include('./includes/filtre.php'); 
?> 


<div class="container">
<div class="row">
 <div class="col-md-3">
 <!-- <link rel="stylesheet" href="assets/css/filter.css"> -->
<aside class="sidebar">
    <h3>Filtrer les voitures</h3>
    <form id="carFilterForm" action="voitures.php" method="post">
        <div class="form-group">
            <label for="inputPrice">Prix :</label>
            <input type="number" class="form-control" id="inputPrice" name="price">
        </div>



        <div class="form-group">
            <label for="inputYear">Année :</label>
            <select class="form-select" id="inputYear" name="year">
                <option value="">Toutes les années</option>
                <?php
                $annee_actuelle = date("Y");

                for ($annee = 1980; $annee <= $annee_actuelle; $annee++) {
                    echo "<option value=\"$annee\">" . $annee . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="inputDistance">Kilométrage :</label>
            <input type="number" class="form-control" id="inputDistance" name="distance">
        </div>

        <div class="form-group">
            <label for="inputBrand">Marque de voiture :</label>
            <select id="inputBrand" class="form-select" name="brand">
                <option value="Toutes">Marque de voiture :</option>
                <?php
                foreach ($brands as $brandOption) : ?>
                    <option value="<?php echo $brandOption; ?>" <?php if ($brand === $brandOption) echo 'selected'; ?>><?php echo $brandOption; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="inputModele">Modèle de voiture :</label>
            <select id="inputModele" class="form-select" name="modele">
                <option value="Toutes">Modèle de voiture :</option>
                <?php
                foreach ($modeles as $modeleOption) : ?>
                    <option value="<?php echo $modeleOption; ?>" <?php if ($modele === $modeleOption) echo 'selected'; ?>><?php echo $modeleOption; ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        <button id="btn-filter" type="submit" class="mt-3 btn btn-primary">Filtrer</button>
    </form>

</aside>
<?php //include('./includes/filtreform.php'); 
      ?> 
 <!-- éléments de filtre ici -->



    </div>



    <div class="col-md-9">
      <main>

        <?php $cars = getCar($pdo);
        ?>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <h1>Liste des voitures en vente</h1>
        </div>

        <div class="row">
          <?php foreach ($cars as $key => $car) {
          include('includes/card_car.php');
          } 
          ?>
        </div>
    </div>

    </main>
    
  </div>
  <div id="results">
        <!-- Les résultats des voitures seront affichés ici -->
</div>
</div>
</div>

<?php
require_once('templates/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="js/filtre.js"></script>
