<?php require_once('./templates/header.php');
require_once('./includes/function/function_get_image.php');
require_once('./includes/function/function_get_car.php');
include('./includes/filtre.php');



$cars = getCar($pdo);
?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <h1>Liste des voitures en vente</h1>
</div>
<div class="row">
  <?php foreach ($cars as $key => $car) {
    include('includes/card_car.php');
  } ?>

</div>

<?php require_once('./templates/footer.php'); ?>