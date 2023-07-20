<?php require_once('./templates/header.php');
require_once('lib/function.php');
include('lib/filtre.php');
$sql = 'SELECT * FROM car ORDER BY id DESC';

//$pdo = new PDO($dsn, $username, $password);
$query = $pdo->prepare($sql);
$query->execute();
$cars = $query->fetchAll(); ?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <h1>Liste des voitures en vente</h1>
</div>
<div class="row">
  <?php foreach ($cars as $key => $car) {
    include('lib/car.php');
  } ?>

</div>

<?php require_once('./templates/footer.php'); ?>